<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfigDroit
 *
 * @ORM\Table(name="config_droit", indexes={@ORM\Index(name="IDutilisateur", columns={"IDutilisateur"})})
 * @ORM\Entity
 */
class ConfigDroit
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDconfig_droit", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconfigDroit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_int", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nomInt = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Etat_int", type="boolean", nullable=true)
     */
    private $etatInt = '0';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDutilisateur", referencedColumnName="IDutilisateur")
     * })
     */
    private $idutilisateur;

    public function getIdconfigDroit(): ?string
    {
        return $this->idconfigDroit;
    }

    public function getNomInt(): ?string
    {
        return $this->nomInt;
    }

    public function setNomInt(?string $nomInt): self
    {
        $this->nomInt = $nomInt;

        return $this;
    }

    public function getEtatInt(): ?bool
    {
        return $this->etatInt;
    }

    public function setEtatInt(?bool $etatInt): self
    {
        $this->etatInt = $etatInt;

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
