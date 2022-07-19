<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compteclient
 *
 * @ORM\Table(name="compteclient", indexes={@ORM\Index(name="IDClient", columns={"IDClient"}), @ORM\Index(name="DATES", columns={"DATES"})})
 * @ORM\Entity
 */
class Compteclient
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCOMPTECLIENT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompteclient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMVENTE", type="integer", nullable=true)
     */
    private $numvente;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CREDIT", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $credit = 0.000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="DEBIT", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $debit = 0.000;

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
    private $dates;

    /**
     * @var float|null
     *
     * @ORM\Column(name="SOLDE", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $solde = 0.000;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDClient", referencedColumnName="IDClient")
     * })
     */
    private $idclient;

    public function getIdcompteclient(): ?int
    {
        return $this->idcompteclient;
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

    public function getCredit(): ?float
    {
        return $this->credit;
    }

    public function setCredit(?float $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    public function getDebit(): ?float
    {
        return $this->debit;
    }

    public function setDebit(?float $debit): self
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

    public function getSolde(): ?float
    {
        return $this->solde;
    }

    public function setSolde(?float $solde): self
    {
        $this->solde = $solde;

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


}
