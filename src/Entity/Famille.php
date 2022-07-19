<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famille
 *
 * @ORM\Table(name="famille", indexes={@ORM\Index(name="LIBELLE", columns={"LIBELLE"}), @ORM\Index(name="AFFICHER", columns={"AFFICHER"})})
 * @ORM\Entity
 */
class Famille
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDFamille", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfamille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $libelle = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AFFICHER", type="boolean", nullable=true)
     */
    private $afficher = true;

    public function getIdfamille(): ?int
    {
        return $this->idfamille;
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

    public function getAfficher(): ?bool
    {
        return $this->afficher;
    }

    public function setAfficher(?bool $afficher): self
    {
        $this->afficher = $afficher;

        return $this;
    }


}
