<?php

namespace App\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;

/**
 * Info
 *
 * @ORM\Table(name="info", uniqueConstraints={@ORM\UniqueConstraint(name="cif", columns={"cif"}), @ORM\UniqueConstraint(name="stat", columns={"stat"}), @ORM\UniqueConstraint(name="rcs", columns={"rcs"}), @ORM\UniqueConstraint(name="nif", columns={"nif"})})
 * @ORM\Entity
 */
class Info
{
    /**
     * @var int
     *
     * @ORM\Column(name="idInfo", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinfo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nif", type="string", length=20, nullable=true)
     */
    private $nif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cif", type="string", length=20, nullable=true)
     */
    private $cif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rcs", type="string", length=20, nullable=true)
     */
    private $rcs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stat", type="string", length=20, nullable=true)
     */
    private $stat;

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
