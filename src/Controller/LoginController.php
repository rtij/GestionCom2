<?php

namespace App\Controller;

use App\Entity\Customer\Authtoken;
use App\Entity\Customer\Users;
use App\Repository\AuthtokenRepository;
use App\Repository\GroupeRepository;
use App\Repository\TypeURepository;
use App\Repository\UsersRepository;
use DateTime;
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


    /**
     * @Route("/signIn", name="SignIn", methods={"POST"})
     */
    public function Signin(Request $request, GroupeRepository $groupeRepository){
        $donnes = json_decode($request->getContent());
        
    }

    /**
     * @Route("/login", name="UserLogin", methods={"POST"})
     */
    public function Login(Request $request,UsersRepository $userRepository, AuthtokenRepository $authtokenRepository, UserPasswordEncoderInterface $encoder){
        $donnes = json_decode($request->getContent());
        $users =  $userRepository->findOneByUsername($donnes->data->username);
        $isPasswordValid = $encoder->isPasswordValid($users, $donnes->data->password);
        if (!$isPasswordValid) {
            return new Response('Mot de passe incorrect');
        }
        $authToken = new Authtoken();

        $token = base64_encode(random_bytes(50));
        $hash = hash("sha256", $token);
        $authToken->setToken($hash);
        $authToken->setDateT(new \DateTime('now'));
        $authToken->setIduser($users);
        $sauv = $this->getDoctrine()->getManager();
        $sauv->persist($authToken);
        $sauv->flush();
        return $this->json(['data'=>$token]);
    }

    /**
     * @Route("/myuser", name="GetMyUser", methods={"GET"})
     */
    public function getMyUser(Request $request, AuthtokenRepository $authTokenRepository){
        $token = $request->headers->get('X-Auth-Token');
        return $this->json(['data'=>$authTokenRepository->findOneByToken(hash("sha256",$token))]);
    }

    /**
     * @Route("/logout", name="UserLogout", methods={"GET"})
     */
    public function Logout(Request $request, AuthtokenRepository $authTokenRepository){
        $token = $request->headers->get('X-Auth-Token');
        $authToken = $authTokenRepository->findOneByToken(hash("sha256",$token));
        $tokenL = $authTokenRepository->FindOutDated(new DateTime('now'),$authToken->getIduser());
        $sauv = $this->getDoctrine()->getManager();
        foreach ($tokenL as $token) {
            $sauv->remove($token);
            $sauv->flush();
        }
        $sauv->remove($authToken);
        $sauv->flush();
        return $this->json(['data'=>"ok"]);
    }
}