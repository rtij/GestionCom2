<?php

namespace App\Controller;


// Kernel application


use App\DBAL\MultiDbConnectionWrapper;
use App\Entity\Customer\Authtoken;
use App\Entity\Customer\Groupe;
use App\Entity\Customer\Info;
use App\Entity\Customer\Users;
use App\Entity\Utilisateur;
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
 *  @Route("/login", name="login")
 */


class LoginController extends AbstractController
{


    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    /**
     * @Route("/signIn", name="SignIn", methods={"POST"})
     */
    public function Signin(Request $request, UsersRepository $userRepository, UserPasswordEncoderInterface $encoder)
    {
        $connection = $this->em->getConnection();
        if (!$connection instanceof MultiDbConnectionWrapper) {
            throw new \RuntimeException('Wrong connection');
        }
        $connection->selectDatabase('Gestuser');
        // $connection->selectDatabase('Gestuser','Gestuser', 'RTJ020399!');
        $donnes = json_decode($request->getContent());
        $user = $userRepository->findOneByUsername($donnes->data->username);
        if (!$user) {
            // return new Response("Nom d'utilisateur introuvable");
            return $this->json(['data' => "Nom d'utilisateur introuvable"]);
        }
        $isPasswordValid = $encoder->isPasswordValid($user, $donnes->data->password);
        if (!$isPasswordValid) {
            return $this->json(['data' => 'Mot de passe incorrect']);
        }
        $authToken = new Authtoken();
        $authToken->setIduser($user);
        $token = base64_encode(random_bytes(50));
        $hash = hash("sha256", $token);
        $authToken->setToken($hash);
        $authToken->setDatet(new DateTime('now'));
        $sauv = $this->getDoctrine()->getManager();
        $sauv->persist($authToken);
        $sauv->flush();
        return $this->json(['data' => $token]);
    }

    /**
     * @Route("/groupe/create", name="SaveGroupe", methods={"POST"})
     */
    public function SaveGroupe(Request $request, GroupeRepository $groupeRepository, InfoRepository $infoRepository)
    {
        $connection = $this->em->getConnection();
        if (!$connection instanceof MultiDbConnectionWrapper) {
            throw new \RuntimeException('Wrong connection');
        }

        $connection->selectDatabase('Gestuser');
        // $connection->selectDatabase('Gestuser','Gestuser', 'RTJ020399!');
        $donnes = json_decode($request->getContent());
        $nom = $groupeRepository->findOneByNameg($donnes->data->nameg);
        if ($nom) {
            return new Response('Nom non disponnible');
        }
        $groupe = new Groupe();
        $groupe->setEmailg($donnes->data->emailg);
        $groupe->setIdinfo($infoRepository->findOneByIdinfo($donnes->data->idinfo->idinfo));
        $groupe->setNameg($donnes->data->nameg);
        $sauv = $this->getDoctrine()->getManager('customer');
        $sauv->persist($groupe);
        $sauv->flush();
        $last = $groupeRepository->findLast();
        return $this->json(['data' => $groupeRepository->findOneByIdgroup($last)]);
    }

    /**
     * @Route("/info/create", name="SaveInfo", methods={"POST"})
     */
    public function SaveInfo(Request $request, InfoRepository $infoRepository)
    {
        $connection = $this->em->getConnection();
        if (!$connection instanceof MultiDbConnectionWrapper) {
            throw new \RuntimeException('Wrong connection');
        }
        $connection->selectDatabase('Gestuser');
        // $connection->selectDatabase('Gestuser','Gestuser', 'RTJ020399!');
        $donnes = json_decode($request->getContent());
        $info = new Info();
        if ($donnes->data->cif != "") {
            if (!$infoRepository->findOneByCif($donnes->data->cif)) {
                $info->setCif($donnes->data->cif);
            }
        }
        if ($donnes->data->nif != "") {
            if (!$infoRepository->findOneByNif($donnes->data->nif)) {
                $info->setNif($donnes->data->nif);
            }
        }
        if ($donnes->data->stat != "") {
            if (!$infoRepository->findOneByStat($donnes->data->stat)) {
                $info->setStat($donnes->data->stat);
            }
        }
        if ($donnes->data->rcs != "") {
            if (!$infoRepository->findOneByRcs($donnes->data->rcs)) {
                $info->setRcs($donnes->data->rcs);
            }
        }
        $sauv = $this->getDoctrine()->getManager('customer');
        $sauv->persist($info);
        $sauv->flush();
        $last = $infoRepository->getLast();
        return $this->json(['data' => $infoRepository->findOneByIdinfo($last)]);
    }

    /**
     * @Route("/login", name="UserLogin", methods={"POST"})
     */
    public function Login(Request $request, UsersRepository $userRepository, UserPasswordEncoderInterface $encoder)
    {
        $donnes = json_decode($request->getContent());
        $users = $userRepository->findOneByEmailu($donnes->data->username);
        if (!$users) {
            $users =  $userRepository->findOneByUsername($donnes->data->username);
            if (!$users) {
                return $this->json(['data' => "Nom d'utilisateur introuvable"]);
            }
        }
        $isPasswordValid = $encoder->isPasswordValid($users, $donnes->data->password);
        if (!$isPasswordValid) {
            return $this->json(['data' => 'Mot de passe incorrect']);
        }
        $authToken = new Authtoken();
        $token = base64_encode(random_bytes(50));
        $hash = hash("sha256", $token);
        $authToken->setToken($hash);
        $authToken->setDateT(new \DateTime('now'));
        $authToken->setIduser($users);
        $sauv = $this->getDoctrine()->getManager('customer');
        $sauv->persist($authToken);
        $sauv->flush();
        return $this->json(['data' => $token]);
    }

    /**
     * @Route("/users/create", name="CreateUser", methods={"POST"})
     */
    public function createUser(Request $request, TypeuRepository $typeURepository, GroupeRepository $groupeRepository, UserPasswordEncoderInterface $encoder)
    {
        $connection = $this->em->getConnection();
        if (!$connection instanceof MultiDbConnectionWrapper) {
            throw new \RuntimeException('Wrong connection');
        }
        $connection->selectDatabase('Gestuser');
        $donnes = json_decode($request->getContent());
        $user = new Users();
        $user->setIdtypeu($typeURepository->findOneByIdtypeu($donnes->data->idtypeu->idtypeu));
        $user->setIdgroup($groupeRepository->findOneByIdgroup($donnes->data->idgroup->idgroup));
        $user->setUsername($donnes->data->username);
        $password = $encoder->encodePassword($user, $donnes->data->password);
        $user->setPassword($password);
        $user->setEmailu($donnes->data->emailu);
        $sauv = $this->getDoctrine()->getManager('customer');
        $sauv->persist($user);
        $sauv->flush();
        $connection->selectDatabase($donnes->data->idgroup->nameg);
        $sauv = $this->getDoctrine()->getManager('default');
        $utilisateur = new Utilisateur();
        $utilisateur->setNom($donnes->data->emailu);
        $utilisateur->setSuperviseur(true);
        $sauv->persist($utilisateur);
        $sauv->flush();
        return $this->json(['data' => "ok"]);
    }

    /**
     * @Route("/myuser", name="GetMyUser", methods={"GET"})
     */
    public function getMyUser(Request $request, AuthtokenRepository $authTokenRepository)
    {
        $connection = $this->em->getConnection();
        if (!$connection instanceof MultiDbConnectionWrapper) {
            throw new \RuntimeException('Wrong connection');
        }
        $connection->selectDatabase('Gestuser');
        $token = $request->headers->get('X-Auth-Token');
        return $this->json(['data' => $authTokenRepository->findOneByToken(hash("sha256", $token))]);
    }

    /**
     * @Route("/logout", name="UserLogout", methods={"GET"})
     */
    public function Logout(Request $request, AuthtokenRepository $authTokenRepository)
    {
        $connection = $this->em->getConnection();
        if (!$connection instanceof MultiDbConnectionWrapper) {
            throw new \RuntimeException('Wrong connection');
        }
        $connection->selectDatabase('Gestuser');
        $token = $request->headers->get('X-Auth-Token');
        $authToken = $authTokenRepository->findOneByToken(hash("sha256", $token));
        $tokenL = $authTokenRepository->FindOutDated(new DateTime('now'), $authToken->getIduser());
        $sauv = $this->getDoctrine()->getManager();
        foreach ($tokenL as $token) {
            $sauv->remove($token);
            $sauv->flush();
        }
        $sauv->remove($authToken);
        $sauv->flush();
        return $this->json(['data' => "ok"]);
    }

    /**
     * @Route("/typeu/liste", name="TypeuListe", methods={"GET"})
     */
    public function TypeuListe(TypeuRepository $typeURepository)
    {
        $connection = $this->em->getConnection();
        if (!$connection instanceof MultiDbConnectionWrapper) {
            throw new \RuntimeException('Wrong connection');
        }
        $connection->selectDatabase('Gestuser');
        return $this->json(['data' => $typeURepository->findAll()]);
    }

    /**
     * @Route("/info/liste", name="InfoListe", methods={"GET"})
     */
    public function getInfoListe(InfoRepository $infoRepository)
    {
        $connection = $this->em->getConnection();
        if (!$connection instanceof MultiDbConnectionWrapper) {
            throw new \RuntimeException('Wrong connection');
        }
        $connection->selectDatabase('Gestuser');
        return $this->json(['data' => $infoRepository->findAll()]);
    }
}
