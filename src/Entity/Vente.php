<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vente
 *
 * @ORM\Table(name="vente", indexes={@ORM\Index(name="IDutilisateur", columns={"IDutilisateur"}), @ORM\Index(name="NUMVENTE", columns={"NUMVENTE"}), @ORM\Index(name="IDCLIENT", columns={"IDCLIENT"}), @ORM\Index(name="DATESVENTE", columns={"DATESVENTE"}), @ORM\Index(name="MOIS", columns={"MOIS"}), @ORM\Index(name="TYPEVENTE", columns={"TYPEVENTE"}), @ORM\Index(name="ANNEE", columns={"ANNEE"})})
 * @ORM\Entity
 */
class Vente
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDVENTE", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvente;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMVENTE", type="integer", nullable=true)
     */
    private $numvente = 0;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATESVENTE", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datesvente ;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MARGE", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $marge = 0.000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TYPEVENTE", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $typevente = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMCLIENT", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $nomclient = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MODEPAIEMENT", type="string", length=50, nullable=true, options={"default"="'0'"})
     */
    private $modepaiement = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="REFPAIEMENT", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $refpaiement = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANT", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $montant = 0.000;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MOIS", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $mois = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ANNEE", type="smallint", nullable=true)
     */
    private $annee = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MOISLETTRE", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $moislettre = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HEURE", type="time", nullable=true, options={"default"="NULL"})
     */
    private $heure ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONNAIE", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $monnaie = 0.000;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCLIENT", referencedColumnName="IDClient")
     * })
     */
    private $idclient;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDutilisateur", referencedColumnName="IDutilisateur")
     * })
     */
    private $idutilisateur;

    public function getIdvente(): ?int
    {
        return $this->idvente;
    }

    public function getNumvente(): ?int
    {
        return $this->numvente;
    }

    public function setNumvente(?int $numvente): self
    {
        $this->numvente = $numvente;

        return $this;
    }

    public function getDatesvente(): ?\DateTimeInterface
    {
        return $this->datesvente;
    }

    public function setDatesvente(?\DateTimeInterface $datesvente): self
    {
        $this->datesvente = $datesvente;

        return $this;
    }

    public function getMarge(): ?float
    {
        return $this->marge;
    }

    public function setMarge(?float $marge): self
    {
        $this->marge = $marge;

        return $this;
    }

    public function getTypevente(): ?string
    {
        return $this->typevente;
    }

    public function setTypevente(?string $typevente): self
    {
        $this->typevente = $typevente;

        return $this;
    }

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(?string $nomclient): self
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    public function getModepaiement(): ?string
    {
        return $this->modepaiement;
    }

    public function setModepaiement(?string $modepaiement): self
    {
        $this->modepaiement = $modepaiement;

        return $this;
    }

    public function getRefpaiement(): ?string
    {
        return $this->refpaiement;
    }

    public function setRefpaiement(?string $refpaiement): self
    {
        $this->refpaiement = $refpaiement;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getMois(): ?int
    {
        return $this->mois;
    }

    public function setMois(?int $mois): self
    {
        $this->mois = $mois;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(?int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getMoislettre(): ?string
    {
        return $this->moislettre;
    }

    public function setMoislettre(?string $moislettre): self
    {
        $this->moislettre = $moislettre;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(?\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getMonnaie(): ?float
    {
        return $this->monnaie;
    }

    public function setMonnaie(?float $monnaie): self
    {
        $this->monnaie = $monnaie;

        return $this;
    }

    public function getIdclient(): ?Client
    {
        return $this->idclient;
    }

    public function setIdclient(?Client $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }

    public function getIdutilisateur(): ?Utilisateur
    {
        return $this->idutilisateur;
    }

    public function setIdutilisateur(?Utilisateur $idutilisateur): self
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }


}
