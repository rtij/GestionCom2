<?php

namespace App\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe", indexes={@ORM\Index(name="fk_info_groupe", columns={"idInfo"}), @ORM\Index(name="fk_user_groupe", columns={"idUser"})})
 * @ORM\Entity
 */
class Groupe
{
    /**
     * @var int
     *
     * @Groups("post:read")
     * @ORM\Column(name="idgroup", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgroup;

    /**
     * @var string
     *
     * @Groups("post:read")
     * @ORM\Column(name="nameg", type="string", length=255, nullable=false)
     */
    private $nameg;

    /**
     * @var string|null
     *
     * @Groups("post:read")
     * @ORM\Column(name="emailg", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $emailg = 'NULL';

    /**
     * @var \DateTime
     *
     * @Groups("post:read")
     * @ORM\Column(name="dateF", type="date", nullable=false)
     */
    private $datef;

    /**
     * @var \DateTime
     *
     * @Groups("post:read")
     * @ORM\Column(name="createdAt", type="date", nullable=false)
     */
    private $createdat;

    /**
     * @var \Info
     *
     * @Groups("post:read")
     * @ORM\ManyToOne(targetEntity="Info")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idInfo", referencedColumnName="idInfo")
     * })
     */
    private $idinfo;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="idUser")
     * })
     */
    private $iduser;
    
    /**
     * @var string|null
     *
     * @Groups("post:read")
     * @ORM\Column(name="baseN", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $basen = 'NULL';

    public function getBasen(): ?string
    {
        return $this->basen;
    }

    public function setBasen(string $basen): self
    {
        $this->basen = $basen;
        return $this;
    }

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

    public function getDatef(): ?\DateTimeInterface
    {
        return $this->datef;
    }

    public function setDatef(\DateTimeInterface $datef): self
    {
        $this->datef = $datef;

        return $this;
    }

    public function getCreatedat(): ?\DateTimeInterface
    {
        return $this->createdat;
    }

    public function setCreatedat(\DateTimeInterface $createdat): self
    {
        $this->createdat = $createdat;

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

    public function getIduser(): ?Users
    {
        return $this->iduser;
    }

    public function setIduser(?Users $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }
}
