<?php

namespace App\Controller;


// Kernel application

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

use App\DBAL\MultiDbConnectionWrapper;
use App\Entity\Customer\Authtoken;
use App\Entity\Customer\Groupe;
use App\Entity\Customer\Info;
use App\Entity\Customer\Users;
use App\Repository\AuthtokenRepository;
use App\Repository\GroupeRepository;
use App\Repository\InfoRepository;
use App\Repository\TypeuRepository;
use App\Repository\UsersRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 *  @Route("/api", name="Api")
 */

class UserController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/users/typeu/liste", name="TypeUListe", methods={"GET"})
     */
    public function getTypeUList(TypeuRepository $typeuRepository)
    {
        return $this->json(['data' => $typeuRepository->findAll()]);
    }

    /**
     * @Route("/users/logout", name="Logout", methods={"GET"})
     */
    public function Logout(Request $request, AuthtokenRepository $authtokenRepository)
    {
        $token = $request->headers->get("X-Auth-Token");
        $result = $authtokenRepository->findOneByToken(hash("sha256", $token));
        $sauv = $this->getDoctrine()->getManager('customer');
        $sauv->remove($result);
        $sauv->flush();
        $userT = $authtokenRepository->findAll();
        foreach ($userT as $usertoken) {

            $now = new DateTime("now");
            $intervale = $now->diff($usertoken->getDatet());
            $days = $intervale->days;
            if ($days > 0) {
                $sauv->remove($usertoken);
                $sauv->flush();
            }
        }
        return $this->json(['data' => "ok"]);
    }


    /**
     * @Route("/users/actual", name="GetMyUser", methods={"GET"})
     */
    public function getMyUser(Request $request, AuthtokenRepository $authTokenRepository)
    {
        $connection = $this->em->getConnection();
        if (!$connection instanceof MultiDbConnectionWrapper) {
            throw new \RuntimeException('Wrong connection');
        }
        $connection->selectDatabase('Gestuser');
        $token = $request->headers->get('X-Auth-Token');
        return $this->json(['data' => $authTokenRepository->findOneByToken(hash("sha256", $token))->getIduser()], 200, [], ["groups" => "post:read"]);
    }

    /**
     * @Route("/users/create/{idgroup}", name="CreateUser", methods={"POST"})
     */
    public function CreateUser(Request $request,Groupe $groupe, UsersRepository $usersRepository, UserPasswordEncoderInterface $encoder, TypeuRepository $typeURepository, GroupeRepository $groupeRepository)
    {
        $connection = $this->em->getConnection();
        if (!$connection instanceof MultiDbConnectionWrapper) {
            throw new \RuntimeException('Wrong connection');
        }
        $connection->selectDatabase('Gestuser');
        $donnes = json_decode($request->getContent());
        $user = new Users();
        $user->setIdtypeu($typeURepository->findOneByIdtypeu($donnes->data->idtypeu->idtypeu));
        $user->setIdgroup($groupe);
        $user->setUsername($donnes->data->username);
        $user->setCreatedat(new DateTime());
        $password = $encoder->encodePassword($user, $donnes->data->password);
        $user->setPassword($password);
        $user->setEmailu($donnes->data->emailu);
        $sauv = $this->getDoctrine()->getManager('customer');
        $sauv->persist($user);
        $sauv->flush();
        return $this->json(['data' => $usersRepository->findByIdgroup($groupe)], 200, [], ["groups" => "post:read"]);
    }

    /**
     * @Route("/users/delete/{iduser}", name="DeleteUsers", methods={"GET"})
     */
    public function DeleteUser(Users $user, UsersRepository $usersRepository){
        $sauv = $this->getDoctrine()->getManager('customer');
        $sauv->remove($user);
        $sauv->flush();
        return $this->json(['data' =>"ok"]);
    }

    /**
     * @Route("/users/liste/{iduser}", name="UsersListe", methods={"GET"})
     */
    public function getUserListe(Users $users, UsersRepository $usersRepository, GroupeRepository $groupeRepository)
    {
        return $this->json(['data' => $usersRepository->findByIdgroup($users->getIdgroup())], 200, [], ["groups" => "post:read"]);
    }


    /**
     * @Route("/users/groupe/liste/{iduser}", name="GroupeUserList", methods={"GET"})
     */
    public function getUserGroupeList(Users $users, GroupeRepository $groupeRepository)
    {
        return $this->json(['data' => $groupeRepository->findByIduser($users)], 200, [], ["groups" => "post:read"]);
    }

    /**
     * @Route("/users/groupe/{iduser}", name="SetUserGroupe", methods={"PUT"})
     */
    public function SetUsersGroupe(Request $request, Users $user, GroupeRepository $groupeRepository, UsersRepository $usersRepository)
    {
        $connection = $this->em->getConnection();
        if (!$connection instanceof MultiDbConnectionWrapper) {
            throw new \RuntimeException('Wrong connection');
        }
        $connection->selectDatabase('Gestuser');
        $donnes = json_decode($request->getContent());
        $groupe = $groupeRepository->findOneByIdgroup($donnes->data->idgroup->idgroup);
        $user->setIdgroup($groupe);
        $sauv = $this->getDoctrine()->getManager('customer');
        $sauv->persist($user);
        $sauv->flush();
        return $this->json(['data' => $user], 200, [], ["groups" => "post:read"]);
    }

    /**
     * @Route("/users/update/{iduser}", name="UpdateUser", methods={"PUT"})
     */
    public function UpdateU(Request $request, Users $user, GroupeRepository $groupeRepository, UsersRepository $usersRepository, UserPasswordEncoderInterface $encoder)
    {
        $connection = $this->em->getConnection();
        if (!$connection instanceof MultiDbConnectionWrapper) {
            throw new \RuntimeException('Wrong connection');
        }
        $connection->selectDatabase('Gestuser');
        $donnes = json_decode($request->getContent());
        $groupe = $groupeRepository->findOneByIdgroup($donnes->data->idgroup->idgroup);
        $user->setIdgroup($groupe);
        $user->setUsername($donnes->data->username);
        $result = $usersRepository->findOneByPassword($donnes->data->password);
        if (!$result) {
            $password = $encoder->encodePassword($user, $donnes->data->password);
            $user->setPassword($password);
        }
        $user->setEmailu($donnes->data->emailu);
        $sauv = $this->getDoctrine()->getManager('customer');
        $sauv->persist($user);
        $sauv->flush();
        return $this->json(['data' => $usersRepository->findByIdgroup($groupe)], 200, [], ["groups" => "post:read"]);
    }

    /**
     * @Route("/utilisateur/create", name="NewUtilisateur", methods={"POST"})
     */
    public function createUtilisateur(Request $request){

    }
}
