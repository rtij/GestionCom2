<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreestock
 *
 * @ORM\Table(name="entreestock", indexes={@ORM\Index(name="PEREMPTION", columns={"PEREMPTION"}), @ORM\Index(name="DATES", columns={"DATES"}), @ORM\Index(name="VU", columns={"VU"}), @ORM\Index(name="IDARTICLES", columns={"IDARTICLES"}), @ORM\Index(name="IDFournisseur", columns={"IDFournisseur"}), @ORM\Index(name="IDDEPOT", columns={"IDDEPOT"})})
 * @ORM\Entity
 */
class Entreestock
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDENTREESTOCK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identreestock;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATES", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dates;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PRU", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $pru = 0.000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="QTE", type="float", precision=10, scale=0, nullable=true)
     */
    private $qte = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMBL", type="string", length=15, nullable=true, options={"default"="'0'"})
     */
    private $numbl = '\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMFACTFRNS", type="string", length=15, nullable=true, options={"default"="'0'"})
     */
    private $numfactfrns = '\'0\'';

    /**
     * @var float|null
     *
     * @ORM\Column(name="PVU", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $pvu = 0.000;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PEREMPTION", type="date", nullable=true, options={"default"="NULL"})
     */
    private $peremption ;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="VU", type="boolean", nullable=true)
     */
    private $vu = true;

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
     * @var \Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="Fournisseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDFournisseur", referencedColumnName="IDFournisseur")
     * })
     */
    private $idfournisseur;

    /**
     * @var \Depot
     *
     * @ORM\ManyToOne(targetEntity="Depot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDDEPOT", referencedColumnName="IDDEPOT")
     * })
     */
    private $iddepot;

    public function getIdentreestock(): ?int
    {
        return $this->identreestock;
    }

    public function getDates(): ?\DateTimeInterface
    {
        return $this->dates;
    }

    public function setDates(?\DateTimeInterface $dates): self
    {
        $this->dates = $dates;

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

    public function getQte(): ?float
    {
        return $this->qte;
    }

    public function setQte(?float $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    public function getNumbl(): ?string
    {
        return $this->numbl;
    }

    public function setNumbl(?string $numbl): self
    {
        $this->numbl = $numbl;

        return $this;
    }

    public function getNumfactfrns(): ?string
    {
        return $this->numfactfrns;
    }

    public function setNumfactfrns(?string $numfactfrns): self
    {
        $this->numfactfrns = $numfactfrns;

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

    public function getPeremption(): ?\DateTimeInterface
    {
        return $this->peremption;
    }

    public function setPeremption(?\DateTimeInterface $peremption): self
    {
        $this->peremption = $peremption;

        return $this;
    }

    public function getVu(): ?bool
    {
        return $this->vu;
    }

    public function setVu(?bool $vu): self
    {
        $this->vu = $vu;

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

    public function getIdfournisseur(): ?Fournisseur
    {
        return $this->idfournisseur;
    }

    public function setIdfournisseur(?Fournisseur $idfournisseur): self
    {
        $this->idfournisseur = $idfournisseur;

        return $this;
    }

    public function getIddepot(): ?Depot
    {
        return $this->iddepot;
    }

    public function setIddepot(?Depot $iddepot): self
    {
        $this->iddepot = $iddepot;

        return $this;
    }


}
