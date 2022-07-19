<?php

namespace App\Controller;


// Kernel application


use App\DBAL\MultiDbConnectionWrapper;
use App\Entity\Customer\Authtoken;
use App\Entity\Customer\Groupe;
use App\Entity\Customer\Info;
use App\Entity\Customer\Users;
use App\Entity\Famille;
use App\Entity\Fournisseur;
use App\Entity\Utilisateur;
use App\Repository\AuthtokenRepository;
use App\Repository\FamilleRepository;
use App\Repository\FournisseurRepository;
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


class FrsController extends AbstractController
{
    /**
     * @Route("/frs/liste", name="FrsListe", methods={"GET"})
     */
    public function getFrsListe(FournisseurRepository $fournisseurRepository){
        return $this->json(["data"=>$fournisseurRepository->findByIssup(0)]);
    }

    /**
     * @Route("/frs/create", name="FrsCreate", methods={"POST"})
     */
    public function CreateFrs(Request $request, FournisseurRepository $fournisseurRepository){
        $donnes = json_decode($request->getContent());
        $f = new Fournisseur();
        $f->setNomfrns($donnes->data->nomfrns);
        $f->setCif($donnes->data->cif);
        $f->setNif($donnes->data->nif);
        $f->setRcs($donnes->data->rcs);
        $f->setStat($donnes->data->stat);
        $f->setAdresse($donnes->data->adresse);
        $f->setIssup($donnes->data->issup);
        $f->setYmail($donnes->data->ymail);
        $f->setTelephone($donnes->data->telephone);
        $sauv = $this->getDoctrine()->getManager();
        $sauv->persist($f);
        $sauv->flush();
        return $this->json(["data"=>$fournisseurRepository->findByIssup(0)]);
    }

    /**
     * @Route("/frs/update/{idfournisseur}", name="UpdateFournisseur", methods={"PUT"})
     */
    public function UpdateFrs(Fournisseur $f, Request $request, FournisseurRepository $fournisseurRepository){
        $donnes = json_decode($request->getContent());
        $f->setNomfrns($donnes->data->nomfrns);
        $f->setCif($donnes->data->cif);
        $f->setNif($donnes->data->nif);
        $f->setRcs($donnes->data->rcs);
        $f->setStat($donnes->data->stat);
        $f->setAdresse($donnes->data->adresse);
        $f->setIssup($donnes->data->issup);
        $f->setYmail($donnes->data->ymail);
        $f->setTelephone($donnes->data->telephone);
        $sauv = $this->getDoctrine()->getManager();
        $sauv->persist($f);
        $sauv->flush();
        return $this->json(["data"=>$fournisseurRepository->findByIssup(0)]);
    }

}