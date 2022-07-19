<?php

namespace App\Controller;



use App\DBAL\MultiDbConnectionWrapper;
use App\Entity\Charge;
use App\Entity\Chargefixe;
use App\Entity\Customer\Authtoken;
use App\Entity\Customer\Groupe;
use App\Entity\Customer\Info;
use App\Entity\Customer\Users;
use App\Entity\Depenses;
use App\Entity\Depot;
use DateTime;
use App\Repository\AuthtokenRepository;
use App\Repository\ChargeRepository;
use App\Repository\DepensesRepository;
use App\Repository\DepotRepository;
use App\Repository\GroupeRepository;
use App\Repository\InfoRepository;
use App\Repository\TypeuRepository;
use App\Repository\UsersRepository;
use DateTimeZone;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 *  @Route("/api", name="Api")
 */

class AdminController extends AbstractController
{
    /**
     * @Route("/time", name="Now", methods={"GET"})
     */
    public function getActualTime()
    {
        $date = new DateTime("now", new DateTimeZone("+0300"));
        return $this->json(['data' => $date]);
    }

    /**
     * @Route("/charge/liste", name="ChargeListe", methods={"GET"})
     */
    public function getChargeListe(ChargeRepository $chargeRepository){
        return $this->json(['data'=>$chargeRepository->findAll()]);
    }


    /**
     * @Route("/charge/create", name="NewCharge", methods={"POST"})
     */
    public function CreateCharge(Request $request, ChargeRepository $chargeRepository){
        $donnes = json_decode($request->getContent());
        $c = new Chargefixe();
        $c->setMontant($donnes->data->montant);
        $c->setLibelle($donnes->data->libelle);
        $sauv= $this->getDoctrine()->getManager();
        $sauv->persist($c);
        $sauv->flush();        
        return $this->json(['data'=>$chargeRepository->findAll()]);
    }
    
    /**
     * @Route("charge/update/{idchargefixe}", name="ChargeFixeUpdate", methods={"PUT"} )
     */
    public function Updatecharge(Request $request, ChargeRepository $chargeRepository, Chargefixe $c){
        $donnes = json_decode($request->getContent());
        $c->setMontant($donnes->data->montant);
        $c->setLibelle($donnes->data->libelle);
        $sauv= $this->getDoctrine()->getManager();
        $sauv->persist($c);
        $sauv->flush();        
        return $this->json(['data'=>$chargeRepository->findAll()]);
    }

    /**
     * @Route("/depenses/liste", name="DepenseListe",methods={"GET"})
     */
    public function DepensesList(DepensesRepository $depensesRepository){
        return $this->json(['data'=>$depensesRepository->findByDeclarer(true)]);
    }

    /**
     * @Route("/depenses/create", name="SaveDepenses", methods={"POST"})
     */
    public function NewDepenses(Request $request, DepensesRepository $depensesRepository){
        $donnes = json_decode($request->getContent());
        $d = new Depenses();
        $d->setLibelle($donnes->data->libelle);
        $d->setMontant($donnes->data->montant);
        $d->setDeclarer($donnes->data->declarer);
        $d->setDates(new DateTime($donnes->data->dates));
        $sauv= $this->getDoctrine()->getManager();
        $sauv->persist($d);
        $sauv->flush();
        return $this->json(['data'=>$depensesRepository->findByDeclarer(true)]);
    }
    /**
     * @Route("/depenses/update/{iddepenses}", name="ModifyDepense", methods={"PUT"})
     */
    public function UpdateDepenses(Request $request, Depenses $d, DepensesRepository $depensesRepository){
        $donnes = json_decode($request->getContent());
        $d->setLibelle($donnes->data->libelle);
        $d->setMontant($donnes->data->montant);
        $d->setDeclarer($donnes->data->declarer);
        $d->setDates(new DateTime($donnes->data->dates));
        $sauv= $this->getDoctrine()->getManager();
        $sauv->persist($d);
        $sauv->flush();
        return $this->json(['data'=>$depensesRepository->findByDeclarer(true)]);
    }

    /**
     * @Route("/depenses/delete/{iddepenses}", name="DeleteDepense", methods={"DELETE"})
     */
    public function DeleteDepenses(Depenses $d, DepensesRepository $depensesRepository){
        $sauv= $this->getDoctrine()->getManager();
        $sauv->remove($d);
        $sauv->flush();
        return $this->json(['data'=>$depensesRepository->findByDeclarer(true)]);
    }
    /**
     * @Route("/depot/liste", name="DepotListe", methods={"GET"})
     */
    public function getDepotList(DepotRepository $depotRepository){
        return $this->json(['data'=>$depotRepository->findAll()]);
    }

    /**
     * @Route("/depot/create", name="NewDepot", methods={"POST"})
     */
    public function CreateDepot(Request $request, DepotRepository $depotRepository){
        $donnes = json_decode($request->getContent());
        $d = new Depot();
        $d->setNomdepot($donnes->data->nomdepot);
        $d->setAdresse($donnes->data->adresse);
        $sauv = $this->getDoctrine()->getManager();
        $sauv->persist($d);
        $sauv->flush();
        return $this->json(['data'=>$depotRepository->findAll()]);
    }
    /**
     * @Route("/depot/update/{iddepot}", name="UpdateDepot", methods={"PUT"})
     */
    public function DepotUpdate(Depot $d, Request $request, DepotRepository $depotRepository){
        $donnes = json_decode($request->getContent());
        $d->setNomdepot($donnes->data->nomdepot);
        $d->setAdresse($donnes->data->adresse);
        $sauv = $this->getDoctrine()->getManager();
        $sauv->persist($d);
        $sauv->flush();
        return $this->json(['data'=>$depotRepository->findAll()]);
    }
}
