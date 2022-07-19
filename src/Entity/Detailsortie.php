<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detailsortie
 *
 * @ORM\Table(name="detailsortie", indexes={@ORM\Index(name="IDDEPOT", columns={"IDDEPOT"}), @ORM\Index(name="IDARTICLES", columns={"IDARTICLES"}), @ORM\Index(name="IDVENTE", columns={"IDVENTE"}), @ORM\Index(name="IDutilisateur", columns={"IDutilisateur"}), @ORM\Index(name="IDCLIENT", columns={"IDCLIENT"})})
 * @ORM\Entity
 */
class Detailsortie
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDDETAILVENTE", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddetailvente;

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
     * @var float|null
     *
     * @ORM\Column(name="MARGE", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $marge = 0.000;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDCLIENT", type="integer", nullable=true)
     */
    private $idclient = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDDEPOT", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $iddepot = NULL;

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
     * @var \Vente
     *
     * @ORM\ManyToOne(targetEntity="Vente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDVENTE", referencedColumnName="IDVENTE")
     * })
     */
    private $idvente;

    public function getIddetailvente(): ?string
    {
        return $this->iddetailvente;
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

    public function getPru(): ?string
    {
        return $this->pru;
    }

    public function setPru(?string $pru): self
    {
        $this->pru = $pru;

        return $this;
    }

    public function getPvu(): ?string
    {
        return $this->pvu;
    }

    public function setPvu(?string $pvu): self
    {
        $this->pvu = $pvu;

        return $this;
    }

    public function getMarge(): ?string
    {
        return $this->marge;
    }

    public function setMarge(?string $marge): self
    {
        $this->marge = $marge;

        return $this;
    }

    public function getIdutilisateur(): ?int
    {
        return $this->idutilisateur;
    }

    public function setIdutilisateur(?int $idutilisateur): self
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function setIdclient(?int $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }

    public function getIddepot(): ?int
    {
        return $this->iddepot;
    }

    public function setIddepot(?int $iddepot): self
    {
        $this->iddepot = $iddepot;

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

    public function getIdvente(): ?Vente
    {
        return $this->idvente;
    }

    public function setIdvente(?Vente $idvente): self
    {
        $this->idvente = $idvente;

        return $this;
    }


}
