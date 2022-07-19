<?php

namespace App\Controller;


// Kernel application


use App\DBAL\MultiDbConnectionWrapper;
use App\Entity\Articles;
use App\Entity\Customer\Authtoken;
use App\Entity\Customer\Groupe;
use App\Entity\Customer\Info;
use App\Entity\Customer\Users;
use App\Entity\Famille;
use App\Entity\Utilisateur;
use App\Repository\ArticleRepository;
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


class ArticleController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/articles/famille/liste", name="FamilleList", methods={"GET"})
     */
    public function getFamilleList(FamilleRepository $familleRepository){
        return $this->json(['data'=>$familleRepository->findByAfficher(1)]);
    }

    /**
     * @Route("/articles/famille/create", name="CreateFamille", methods={"POST"})
     */
    public function newFamilleArticle(Request $request, FamilleRepository $familleRepository){
        $donnes = json_decode($request->getContent());
        $fa =new Famille();
        $fa->setLibelle($donnes->data->libelle);
        $fa->setAfficher(1);
        $sauv = $this->getDoctrine()->getManager();
        $sauv->persist($fa);
        $sauv->flush();
        return $this->json(['data'=>$familleRepository->findByAfficher(1)]);
    }

    /**
     * @Route("/articles/liste", name="ArticleListe", methods={"GET"})
     */
    public function getArticleList(ArticleRepository $articleRepository){
        return $this->json(['data'=>$articleRepository->findByIssup(0)]);
    }


    /**
     * @Route("/articles/create", name="CreateArticle", methods={"POST"})
     */
    public function NewArticle(Request $request, ArticleRepository $articleRepository, FamilleRepository $familleRepository, FournisseurRepository $fournisseurRepository){
        $donnes = json_decode($request->getContent());
        $a = new Articles();
        $a->setDesignation($donnes->data->designation);
        $a->setCoderef($donnes->data->coderef);
        $a->setPvu($donnes->data->pvu);
        $a->setPru($donnes->data->pru);
        if($donnes->data->idfamille){
            $a->setIdfamille($familleRepository->findOneByIdfamille($donnes->data->idfamille->idfamille));
        }
        if($donnes->data->idfournisseur){
            $a->setIdfournisseur($fournisseurRepository->findOneByIdfournisseur($donnes->data->idfournisseur->idfournisseur));
        }
        $a->setSeuilappro($donnes->data->seuilappro);
        $sauv = $this->getDoctrine()->getManager();
        $sauv->persist($a);
        $sauv->flush();
        return $this->json(['data'=>$articleRepository->findByIssup(0)]);
    }

    /**
     * @Route("/articles/photo/{idarticles}", name="UpdatePhotoArticle", methods={"POST"})
     */
    public function UpdatePhotoArticle(Request $request, Articles $articles){
        $file = $request->files->get('file');
        $files = md5(uniqid()) . '.' . $file->guessExtension();
        $extension = $file->guessExtension();
        $articles->setPhoto($files);
        $sauv = $this->getDoctrine()->getManager();
        $sauv->persist($articles);
        $sauv->flush();
        $file->move($this->getParameter('file_directory'), $files);
        return $this->json(['data' => "ok"]);
    }

    /**
     * @Route("/articles/update/{idarticles}", name="UpdateArticles", methods="PUT")
     */
    public function ArticlesUpdate(Articles $a, Request $request, ArticleRepository $articleRepository, FamilleRepository $familleRepository, FournisseurRepository $fournisseurRepository ){
        $donnes = json_decode($request->getContent());
        $a->setDesignation($donnes->data->designation);
        $a->setCoderef($donnes->data->coderef);
        $a->setPvu($donnes->data->pvu);
        $a->setPru($donnes->data->pru);
        if($donnes->data->idfamille){
            $a->setIdfamille($familleRepository->findOneByIdfamille($donnes->data->idfamille->idfamille));
        }
        if($donnes->data->idfournisseur){
            $a->setIdfournisseur($fournisseurRepository->findOneByIdfournisseur($donnes->data->idfournisseur->idfournisseur));
        }else{
            $a->setIdfournisseur(null);
        }
        $a->setIssup($donnes->data->issup);
        $a->setSeuilappro($donnes->data->seuilappro);
        $sauv = $this->getDoctrine()->getManager();
        $sauv->persist($a);
        $sauv->flush();
        return $this->json(['data'=>$articleRepository->findByIssup(0)]);
    }
   
}