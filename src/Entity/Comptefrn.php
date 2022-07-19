<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comptefrn
 *
 * @ORM\Table(name="comptefrn", indexes={@ORM\Index(name="NUMFACT", columns={"NUMFACT"}), @ORM\Index(name="NUMBL", columns={"NUMBL"}), @ORM\Index(name="IDFOURNISSEUR", columns={"IDFOURNISSEUR"}), @ORM\Index(name="DATES", columns={"DATES"})})
 * @ORM\Entity
 */
class Comptefrn
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCOMPTEFRN", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomptefrn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMBL", type="string", length=15, nullable=true, options={"default"="'0'"})
     */
    private $numbl = '\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CREDIT", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $credit = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DEBIT", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $debit = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $libelle = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MODEPAIEMENT", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $modepaiement = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATES", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dates = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMFACT", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $numfact = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="SOLDE", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $solde = '0.000';

    /**
     * @var \Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="Fournisseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDFOURNISSEUR", referencedColumnName="IDFournisseur")
     * })
     */
    private $idfournisseur;

    public function getIdcomptefrn(): ?int
    {
        return $this->idcomptefrn;
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

    public function getCredit(): ?string
    {
        return $this->credit;
    }

    public function setCredit(?string $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    public function getDebit(): ?string
    {
        return $this->debit;
    }

    public function setDebit(?string $debit): self
    {
        $this->debit = $debit;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

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

    public function getDates(): ?\DateTimeInterface
    {
        return $this->dates;
    }

    public function setDates(?\DateTimeInterface $dates): self
    {
        $this->dates = $dates;

        return $this;
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

    public function getSolde(): ?string
    {
        return $this->solde;
    }

    public function setSolde(?string $solde): self
    {
        $this->solde = $solde;

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
