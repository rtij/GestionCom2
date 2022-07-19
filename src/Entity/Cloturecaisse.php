<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cloturecaisse
 *
 * @ORM\Table(name="cloturecaisse", indexes={@ORM\Index(name="DATE", columns={"DATE"}), @ORM\Index(name="IDutilisateur", columns={"IDutilisateur"})})
 * @ORM\Entity
 */
class Cloturecaisse
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCLOTURECAISSE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcloturecaisse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE", type="date", nullable=true, options={"default"="NULL"})
     */
    private $date;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDutilisateur", referencedColumnName="IDutilisateur")
     * })
     */
    private $idutilisateur;

    public function getIdcloturecaisse(): ?int
    {
        return $this->idcloturecaisse;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIdutilisateur(): ?Utilisateur
    {
        return $this->idutilisateur;
    }

    public function setIdutilisateur(?Utilisateur $idutilisateur): self
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }


}
