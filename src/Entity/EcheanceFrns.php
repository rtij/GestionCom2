<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcheanceFrns
 *
 * @ORM\Table(name="echeance_frns", indexes={@ORM\Index(name="IDFournisseur", columns={"IDFournisseur"}), @ORM\Index(name="NUMFACT", columns={"NUMFACT"}), @ORM\Index(name="DATE_ECHEANCE", columns={"DATE_ECHEANCE"})})
 * @ORM\Entity
 */
class EcheanceFrns
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDECHEANCE_FRNS", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idecheanceFrns;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMFACT", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $numfact = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_ECHEANCE", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateEcheance = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANT", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $montant = '0.000';

    /**
     * @var \Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="Fournisseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDFournisseur", referencedColumnName="IDFournisseur")
     * })
     */
    private $idfournisseur;

    public function getIdecheanceFrns(): ?string
    {
        return $this->idecheanceFrns;
    }

    public function getNumfact(): ?string
    {
        return $this->numfact;
    }

    public function setNumfact(?string $numfact): self
    {
        $this->numfact = $numfact;

        return $this;
    }

    public function getDateEcheance(): ?\DateTimeInterface
    {
        return $this->dateEcheance;
    }

    public function setDateEcheance(?\DateTimeInterface $dateEcheance): self
    {
        $this->dateEcheance = $dateEcheance;

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

    public function getIdfournisseur(): ?Fournisseur
    {
        return $this->idfournisseur;
    }

    public function setIdfournisseur(?Fournisseur $idfournisseur): self
    {
        $this->idfournisseur = $idfournisseur;

        return $this;
    }


}
