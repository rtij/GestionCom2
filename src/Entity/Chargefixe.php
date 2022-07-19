<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chargefixe
 *
 * @ORM\Table(name="chargefixe")
 * @ORM\Entity
 */
class Chargefixe
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDChargeFixe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idchargefixe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $libelle = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Montant", type="decimal", precision=24, scale=3, nullable=true)
     */
    private $montant = 0.000;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Selected", type="boolean", nullable=true)
     */
    private $selected = false;

    public function getIdchargefixe(): ?int
    {
        return $this->idchargefixe;
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

    public function getSelect(): ?bool
    {
        return $this->selected;
    }

    public function setSelect(?bool $select): self
    {
        $this->selected = $select;

        return $this;
    }


}
