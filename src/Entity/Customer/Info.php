<?php

namespace App\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Info
 *
 * @ORM\Table(name="info", uniqueConstraints={@ORM\UniqueConstraint(name="stat", columns={"stat"}), @ORM\UniqueConstraint(name="nif", columns={"nif"}), @ORM\UniqueConstraint(name="cif", columns={"cif"}), @ORM\UniqueConstraint(name="rcs", columns={"rcs"})})
 * @ORM\Entity
 */
class Info
{
    /**
     * @var int
     *
     * @Groups("post:read")
     * @ORM\Column(name="idInfo", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinfo;

    /**
     * @var string|null
     *
     * @Groups("post:read")
     * @ORM\Column(name="nif", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $nif = 'NULL';

    /**
     * @var string|null
     *
     * @Groups("post:read")
     * @ORM\Column(name="cif", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $cif = 'NULL';

    /**
     * @var string|null
     *
     * @Groups("post:read")
     * @ORM\Column(name="rcs", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $rcs = 'NULL';

    /**
     * @var string|null
     *
     * @Groups("post:read")
     * @ORM\Column(name="stat", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $stat = 'NULL';

    public function getIdinfo(): ?int
    {
        return $this->idinfo;
    }

    public function getNif(): ?string
    {
        return $this->nif;
    }

    public function setNif(?string $nif): self
    {
        $this->nif = $nif;

        return $this;
    }

    public function getCif(): ?string
    {
        return $this->cif;
    }

    public function setCif(?string $cif): self
    {
        $this->cif = $cif;

        return $this;
    }

    public function getRcs(): ?string
    {
        return $this->rcs;
    }

    public function setRcs(?string $rcs): self
    {
        $this->rcs = $rcs;

        return $this;
    }

    public function getStat(): ?string
    {
        return $this->stat;
    }

    public function setStat(?string $stat): self
    {
        $this->stat = $stat;

        return $this;
    }


}
