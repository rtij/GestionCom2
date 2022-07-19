<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attente
 *
 * @ORM\Table(name="attente", indexes={@ORM\Index(name="IDARTICLES", columns={"IDARTICLES"}), @ORM\Index(name="NumVente", columns={"NumVente"})})
 * @ORM\Entity
 */
class Attente
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDAttente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idattente;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NumVente", type="integer", nullable=true)
     */
    private $numvente = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="QTE", type="float", precision=10, scale=0, nullable=true)
     */
    private $qte = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRU", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $pru = 0.000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANT", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $montant = 0.000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PVU", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $pvu = 0.000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMCLIENT", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $nomclient = 'NULL';

    /**
     * @var \Articles
     *
     * @ORM\ManyToOne(targetEntity="Articles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDARTICLES", referencedColumnName="IDARTICLES")
     * })
     */
    private $idarticles;

    public function getIdattente(): ?int
    {
        return $this->idattente;
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

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(?string $montant): self
    {
        $this->montant = $montant;

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

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(?string $nomclient): self
    {
        $this->nomclient = $nomclient;

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


}
