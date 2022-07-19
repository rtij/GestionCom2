<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreetmp
 *
 * @ORM\Table(name="entreetmp", indexes={@ORM\Index(name="IDARTICLES", columns={"IDARTICLES"}), @ORM\Index(name="IDFamille", columns={"IDFamille"}), @ORM\Index(name="IDFournisseur", columns={"IDFournisseur"})})
 * @ORM\Entity
 */
class Entreetmp
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDENTREETMP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identreetmp;

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
     * @var string|null
     *
     * @ORM\Column(name="PRU", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $pru = '0.000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="QTE", type="float", precision=10, scale=0, nullable=true)
     */
    private $qte = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMFACTFRNS", type="integer", nullable=true)
     */
    private $numfactfrns = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMBL", type="integer", nullable=true)
     */
    private $numbl = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PVU", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $pvu = '0.000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDDEPOT", type="integer", nullable=true)
     */
    private $iddepot = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANT", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $montant = '0.000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="SEUILAPPRO", type="integer", nullable=true)
     */
    private $seuilappro = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PEREMPTION", type="date", nullable=true, options={"default"="NULL"})
     */
    private $peremption = 'NULL';

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
     * @var \Famille
     *
     * @ORM\ManyToOne(targetEntity="Famille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDFamille", referencedColumnName="IDFamille")
     * })
     */
    private $idfamille;

    public function getIdentreetmp(): ?int
    {
        return $this->identreetmp;
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

    public function getNumfactfrns(): ?int
    {
        return $this->numfactfrns;
    }

    public function setNumfactfrns(?int $numfactfrns): self
    {
        $this->numfactfrns = $numfactfrns;

        return $this;
    }

    public function getNumbl(): ?int
    {
        return $this->numbl;
    }

    public function setNumbl(?int $numbl): self
    {
        $this->numbl = $numbl;

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

    public function getIddepot(): ?int
    {
        return $this->iddepot;
    }

    public function setIddepot(?int $iddepot): self
    {
        $this->iddepot = $iddepot;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(?string $montant): self
    {
        $this->montant = $montant;

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

    public function getPeremption(): ?\DateTimeInterface
    {
        return $this->peremption;
    }

    public function setPeremption(?\DateTimeInterface $peremption): self
    {
        $this->peremption = $peremption;

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

    public function getIdfamille(): ?Famille
    {
        return $this->idfamille;
    }

    public function setIdfamille(?Famille $idfamille): self
    {
        $this->idfamille = $idfamille;

        return $this;
    }


}
