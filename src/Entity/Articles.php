<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="IDFAMILLE", columns={"IDFAMILLE"}), @ORM\Index(name="CODEREF", columns={"CODEREF"}), @ORM\Index(name="FAITDEPOT", columns={"FAITDEPOT"}), @ORM\Index(name="DESIGNATION", columns={"DESIGNATION"}), @ORM\Index(name="IDFournisseur", columns={"IDFournisseur"}), @ORM\Index(name="FAIT", columns={"FAIT"})})
 * @ORM\Entity
 */
class Articles
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDARTICLES", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarticles;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODEREF", type="string", length=150, nullable=true, options={"default"="NULL"})
     */
    private $coderef = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESIGNATION", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $designation = 'NULL';

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
     * @var string|null
     *
     * @ORM\Column(name="PHOTO", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $photo = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="STKMAG",  type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $stkmag = 0;

    /**
     * @var float|null
     *
     * @ORM\Column(name="STKDP1",  type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $stkdp1 = 0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SEUILAPPRO", type="integer", nullable=true)
     */
    private $seuilappro = 0;

    /**
     * @var float|null
     *
     * @ORM\Column(name="STKTOTAL",  type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $stktotal = 0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FAIT", type="boolean", nullable=true)
     */
    private $fait = false;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FAITDEPOT", type="boolean", nullable=true)
     */
    private $faitdepot = false;

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
     * @var \Famille
     *
     * @ORM\ManyToOne(targetEntity="Famille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDFAMILLE", referencedColumnName="IDFamille")
     * })
     */
    private $idfamille;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="issup", type="boolean", nullable=true)
     */
    private $issup = false;

    public function getIdarticles(): ?string
    {
        return $this->idarticles;
    }

    public function getCoderef(): ?string
    {
        return $this->coderef;
    }

    public function setCoderef(?string $coderef): self
    {
        $this->coderef = $coderef;
        

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): self
    {
        $this->designation = $designation;

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

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getStkmag(): ?float
    {
        return $this->stkmag;
    }

    public function setStkmag(?float $stkmag): self
    {
        $this->stkmag = $stkmag;

        return $this;
    }

    public function getStkdp1(): ?float
    {
        return $this->stkdp1;
    }

    public function setStkdp1(?float $stkdp1): self
    {
        $this->stkdp1 = $stkdp1;

        return $this;
    }

    public function getSeuilappro(): ?int
    {
        return $this->seuilappro;
    }

    public function setSeuilappro(?int $seuilappro): self
    {
        $this->seuilappro = $seuilappro;

        return $this;
    }

    public function getStktotal(): ?float
    {
        return $this->stktotal;
    }

    public function setStktotal(?float $stktotal): self
    {
        $this->stktotal = $stktotal;

        return $this;
    }

    public function getFait(): ?bool
    {
        return $this->fait;
    }

    public function setFait(?bool $fait): self
    {
        $this->fait = $fait;

        return $this;
    }

    public function getFaitdepot(): ?bool
    {
        return $this->faitdepot;
    }

    public function setFaitdepot(?bool $faitdepot): self
    {
        $this->faitdepot = $faitdepot;

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

    public function getIdfamille(): ?Famille
    {
        return $this->idfamille;
    }

    public function setIdfamille(?Famille $idfamille): self
    {
        $this->idfamille = $idfamille;

        return $this;
    }

    public function getIssup(): bool
    {
        return $this->issup;
    }

    public function setIssup(bool $issup): self
    {
        $this->issup = $issup;
        return $this;
    }
}
