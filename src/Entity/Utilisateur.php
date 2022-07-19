<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="Nom", columns={"Nom"})}, indexes={@ORM\Index(name="IDtype_user", columns={"IDtype_user"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idutilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Motdepasse", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $motdepasse = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Superviseur", type="boolean", nullable=true)
     */
    private $superviseur = false;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Motdepasseàsaisir", type="boolean", nullable=true)
     */
    private $motdepasse�saisir = false;

    /**
     * @var \TypeUser
     *
     * @ORM\ManyToOne(targetEntity="TypeUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDtype_user", referencedColumnName="IDtype_user")
     * })
     */
    private $idtypeUser;

    public function getIdutilisateur(): ?int
    {
        return $this->idutilisateur;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getMotdepasse(): ?string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(?string $motdepasse): self
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    public function getSuperviseur(): ?bool
    {
        return $this->superviseur;
    }

    public function setSuperviseur(?bool $superviseur): self
    {
        $this->superviseur = $superviseur;

        return $this;
    }

    public function getMotdepasse�saisir(): ?bool
    {
        return $this->motdepasse�saisir;
    }

    public function setMotdepasse�saisir(?bool $motdepasse�saisir): self
    {
        $this->motdepasse�saisir = $motdepasse�saisir;

        return $this;
    }

    public function getIdtypeUser(): ?TypeUser
    {
        return $this->idtypeUser;
    }

    public function setIdtypeUser(?TypeUser $idtypeUser): self
    {
        $this->idtypeUser = $idtypeUser;

        return $this;
    }


}
