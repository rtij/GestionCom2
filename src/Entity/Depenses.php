<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depenses
 *
 * @ORM\Table(name="depenses", indexes={@ORM\Index(name="DATES", columns={"DATES"}), @ORM\Index(name="MOIS", columns={"MOIS"}), @ORM\Index(name="ANNEE", columns={"ANNEE"})})
 * @ORM\Entity
 */
class Depenses
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDDEPENSES", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddepenses;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATES", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dates ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $libelle = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="MONTANT", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $montant = 0.000;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MOIS", type="integer", nullable=true)
     */
    private $mois = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ANNEE", type="smallint", nullable=true)
     */
    private $annee = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TYPE", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $type = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="DECLARER", type="boolean", nullable=true)
     */
    private $declarer = false;

    public function getIddepenses(): ?int
    {
        return $this->iddepenses;
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

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getMois(): ?int
    {
        return $this->mois;
    }

    public function setMois(?int $mois): self
    {
        $this->mois = $mois;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(?int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDeclarer(): ?bool
    {
        return $this->declarer;
    }

    public function setDeclarer(?bool $declarer): self
    {
        $this->declarer = $declarer;

        return $this;
    }


}
