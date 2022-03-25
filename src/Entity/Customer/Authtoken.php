<?php

namespace App\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;

/**
 * Authtoken
 *
 * @ORM\Table(name="authtoken", indexes={@ORM\Index(name="fk_user_token", columns={"idUser"})})
 * @ORM\Entity
 */
class Authtoken
{
    /**
     * @var int
     *
     * @ORM\Column(name="idToken", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtoken;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateT", type="date", nullable=false)
     */
    private $datet;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="idUser")
     * })
     */
    private $iduser;

    public function getIdtoken(): ?string
    {
        return $this->idtoken;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getDatet(): ?\DateTimeInterface
    {
        return $this->datet;
    }

    public function setDatet(\DateTimeInterface $datet): self
    {
        $this->datet = $datet;

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
