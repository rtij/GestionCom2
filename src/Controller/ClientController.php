<?php

namespace App\Controller;

use App\Entity\Client;
use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 *  @Route("/api", name="Api")
 */

class ClientController extends AbstractController
{

    /**
     * @Route("/clients/liste",name="ClientList", methods="GET")
     */
    public function GetClientList(ClientRepository $clientRepository){
        return $this->json(['data'=>$clientRepository->findByIssup(0)]);
    }

    /**
     * @Route("/clients/create", name="ClientCreate", methods="POST")
     */
    public function CreateClient(Request $request, ClientRepository $clientRepository){
        $donnes = json_decode($request->getContent());
        $client = new Client();
        $client->setAdresse($donnes->data->adresse);
        $client->setRcs($donnes->data->rcs);
        $client->setNif($donnes->data->nif);
        $client->setIssup(false);
        $client->setTelephone($donnes->data->telephone);
        $client->setYmail($donnes->data->ymail);
        $client->setStat($donnes->data->stat);
        $client->setCif($donnes->data->cif);
        $client->setNomclient($donnes->data->nomclient);
        $sauv = $this->getDoctrine()->getManager();
        $sauv->persist($client);
        $sauv->flush();
        return $this->json(['data'=>$clientRepository->findByIssup(0)]);
    }

    /**
     * @Route("/clients/update/{idclient}", name="ClientUpdate", methods={"PUT"})
     */
    public function UpdateClient(Request $request, Client $client, ClientRepository $clientRepository){
        $donnes = json_decode($request->getContent());
        $client->setAdresse($donnes->data->adresse);
        $client->setRcs($donnes->data->rcs);
        $client->setNif($donnes->data->nif);
        $client->setIssup($donnes->data->issup);
        $client->setTelephone($donnes->data->telephone);
        $client->setYmail($donnes->data->ymail);
        $client->setStat($donnes->data->stat);
        $client->setCif($donnes->data->cif);
        $client->setNomclient($donnes->data->nomclient);
        $sauv = $this->getDoctrine()->getManager();
        $sauv->persist($client);
        $sauv->flush();
        return $this->json(['data'=>$clientRepository->findByIssup(0)]);
    }
}