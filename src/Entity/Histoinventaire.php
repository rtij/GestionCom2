<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Histoinventaire
 *
 * @ORM\Table(name="histoinventaire", indexes={@ORM\Index(name="IDARTICLES", columns={"IDARTICLES"}), @ORM\Index(name="DATES", columns={"DATES"}), @ORM\Index(name="MAGDEPOT", columns={"MAGDEPOT"})})
 * @ORM\Entity
 */
class Histoinventaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDHISTOINVENTAIRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistoinventaire;

    /**
     * @var float|null
     *
     * @ORM\Column(name="STKTHEO", type="float", precision=10, scale=0, nullable=true)
     */
    private $stktheo = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="STKPHYS", type="float", precision=10, scale=0, nullable=true)
     */
    private $stkphys = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATES", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dates = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAGDEPOT", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $magdepot = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ECART", type="float", precision=10, scale=0, nullable=true)
     */
    private $ecart = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="OBSERVATION", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $observation = 'NULL';

    /**
     * @var \Articles
     *
     * @ORM\ManyToOne(targetEntity="Articles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDARTICLES", referencedColumnName="IDARTICLES")
     * })
     */
    private $idarticles;

    public function getIdhistoinventaire(): ?int
    {
        return $this->idhistoinventaire;
    }

    public function getStktheo(): ?float
    {
        return $this->stktheo;
    }

    public function setStktheo(?float $stktheo): self
    {
        $this->stktheo = $stktheo;

        return $this;
    }

    public function getStkphys(): ?float
    {
        return $this->stkphys;
    }

    public function setStkphys(?float $stkphys): self
    {
        $this->stkphys = $stkphys;

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

    public function getMagdepot(): ?string
    {
        return $this->magdepot;
    }

    public function setMagdepot(?string $magdepot): self
    {
        $this->magdepot = $magdepot;

        return $this;
    }

    public function getEcart(): ?float
    {
        return $this->ecart;
    }

    public function setEcart(?float $ecart): self
    {
        $this->ecart = $ecart;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): self
    {
        $this->observation = $observation;

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
