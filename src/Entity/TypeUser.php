<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeUser
 *
 * @ORM\Table(name="type_user")
 * @ORM\Entity
 */
class TypeUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDtype_user", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $libelle = 'NULL';

    public function getIdtypeUser(): ?string
    {
        return $this->idtypeUser;
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


}
