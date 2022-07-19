<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Histosupression
 *
 * @ORM\Table(name="histosupression", indexes={@ORM\Index(name="DATESupp", columns={"DATESupp"}), @ORM\Index(name="IDARTICLES", columns={"IDARTICLES"}), @ORM\Index(name="IDutilisateur", columns={"IDutilisateur"})})
 * @ORM\Entity
 */
class Histosupression
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDHISTOSUPRESSION", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistosupression;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMVENTE", type="integer", nullable=true)
     */
    private $numvente = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATESupp", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datesupp ;

    /**
     * @var float|null
     *
     * @ORM\Column(name="QTE", type="float", precision=10, scale=0, nullable=true)
     */
    private $qte = 0;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PRU", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $pru = 0.000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PVU", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $pvu = 0.000;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HEURE", type="time", nullable=true, options={"default"="NULL"})
     */
    private $heure;

    /**
     * @var \Articles
     *
     * @ORM\ManyToOne(targetEntity="Articles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDARTICLES", referencedColumnName="IDARTICLES")
     * })
     */
    private $idarticles;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDutilisateur", referencedColumnName="IDutilisateur")
     * })
     */
    private $idutilisateur;

    public function getIdhistosupression(): ?string
    {
        return $this->idhistosupression;
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

    public function getDatesupp(): ?\DateTimeInterface
    {
        return $this->datesupp;
    }

    public function setDatesupp(?\DateTimeInterface $datesupp): self
    {
        $this->datesupp = $datesupp;

        return $this;
    }

    public function getQte(): ?float
    {
        return $this->qte;
    }

    public function setQte(?float $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    public function getPru(): ?float
    {
        return $this->pru;
    }

    public function setPru(?float $pru): self
    {
        $this->pru = $pru;

        return $this;
    }

    public function getPvu(): ?float
    {
        return $this->pvu;
    }

    public function setPvu(?float $pvu): self
    {
        $this->pvu = $pvu;

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

    public function getIdarticles(): ?Articles
    {
        return $this->idarticles;
    }

    public function setIdarticles(?Articles $idarticles): self
    {
        $this->idarticles = $idarticles;

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
