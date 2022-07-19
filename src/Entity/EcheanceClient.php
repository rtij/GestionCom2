<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcheanceClient
 *
 * @ORM\Table(name="echeance_client", indexes={@ORM\Index(name="NUMVENTE", columns={"NUMVENTE"}), @ORM\Index(name="DATE_ECHEANCE", columns={"DATE_ECHEANCE"}), @ORM\Index(name="IDCLIENT", columns={"IDCLIENT"})})
 * @ORM\Entity
 */
class EcheanceClient
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDECHEANCE_CLIENT", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idecheanceClient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMVENTE", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $numvente = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_ECHEANCE", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateEcheance ;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MONTANT", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $montant = 0.000;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCLIENT", referencedColumnName="IDClient")
     * })
     */
    private $idclient;

    public function getIdecheanceClient(): ?string
    {
        return $this->idecheanceClient;
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

    public function getDateEcheance(): ?\DateTimeInterface
    {
        return $this->dateEcheance;
    }

    public function setDateEcheance(?\DateTimeInterface $dateEcheance): self
    {
        $this->dateEcheance = $dateEcheance;

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
