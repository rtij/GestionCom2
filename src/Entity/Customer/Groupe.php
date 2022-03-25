<?php

namespace App\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe", indexes={@ORM\Index(name="fk_info_groupe", columns={"idInfo"})})
 * @ORM\Entity
 */
class Groupe
{
    /**
     * @var int
     *
     * @ORM\Column(name="idgroup", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgroup;

    /**
     * @var string
     *
     * @ORM\Column(name="nameg", type="string", length=255, nullable=false)
     */
    private $nameg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailg", type="string", length=255, nullable=true)
     */
    private $emailg;

    /**
     * @var \Info
     *
     * @ORM\ManyToOne(targetEntity="Info")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idInfo", referencedColumnName="idInfo")
     * })
     */
    private $idinfo;

    public function getIdgroup(): ?int
    {
        return $this->idgroup;
    }

    public function getNameg(): ?string
    {
        return $this->nameg;
    }

    public function setNameg(string $nameg): self
    {
        $this->nameg = $nameg;

        return $this;
    }

    public function getEmailg(): ?string
    {
        return $this->emailg;
    }

    public function setEmailg(?string $emailg): self
    {
        $this->emailg = $emailg;

        return $this;
    }

    public function getIdinfo(): ?Info
    {
        return $this->idinfo;
    }

    public function setIdinfo(?Info $idinfo): self
    {
        $this->idinfo = $idinfo;

        return $this;
    }


}
