<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Histoentresortie
 *
 * @ORM\Table(name="histoentresortie", indexes={@ORM\Index(name="IDARTICLES", columns={"IDARTICLES"}), @ORM\Index(name="DATES", columns={"DATES"}), @ORM\Index(name="MAGDEPOT", columns={"MAGDEPOT"})})
 * @ORM\Entity
 */
class Histoentresortie
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDHISTOENTRESORTIE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistoentresortie;

    /**
     * @var float
     *
     * @ORM\Column(name="QTEENTREE", type="float", precision=10, scale=0, nullable=false)
     */
    private $qteentree = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="QTESORTIE", type="float", precision=10, scale=0, nullable=false)
     */
    private $qtesortie = 0;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATES", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dates;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $libelle = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMBL", type="string", length=15, nullable=true, options={"default"="'0'"})
     */
    private $numbl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMFACT", type="string", length=15, nullable=true, options={"default"="'0'"})
     */
    private $numfact ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAGDEPOT", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $magdepot = 'NULL';

    /**
     * @var float
     *
     * @ORM\Column(name="QTESTOCK", type="float", precision=10, scale=0, nullable=false)
     */
    private $qtestock = 0;

    /**
     * @var \Articles
     *
     * @ORM\ManyToOne(targetEntity="Articles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDARTICLES", referencedColumnName="IDARTICLES")
     * })
     */
    private $idarticles;

    public function getIdhistoentresortie(): ?int
    {
        return $this->idhistoentresortie;
    }

    public function getQteentree(): ?float
    {
        return $this->qteentree;
    }

    public function setQteentree(float $qteentree): self
    {
        $this->qteentree = $qteentree;

        return $this;
    }

    public function getQtesortie(): ?float
    {
        return $this->qtesortie;
    }

    public function setQtesortie(float $qtesortie): self
    {
        $this->qtesortie = $qtesortie;

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

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

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

    public function getNumfact(): ?string
    {
        return $this->numfact;
    }

    public function setNumfact(?string $numfact): self
    {
        $this->numfact = $numfact;

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

    public function getQtestock(): ?float
    {
        return $this->qtestock;
    }

    public function setQtestock(float $qtestock): self
    {
        $this->qtestock = $qtestock;

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
