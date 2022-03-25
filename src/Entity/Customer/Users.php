<?php

namespace App\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="fk_users_groupe", columns={"idgroup"}), @ORM\Index(name="fk_user_typeu", columns={"idTypeu"})})
 * @ORM\Entity
 */
class Users implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailu", type="string", length=255, nullable=true)
     */
    private $emailu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;


    /**
     * @var \Typeu
     *
     * @ORM\ManyToOne(targetEntity="Typeu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTypeu", referencedColumnName="idTypeu")
     * })
     */
    private $idtypeu;

    /**
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idgroup", referencedColumnName="idgroup")
     * })
     */
    private $idgroup;

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmailu(): ?string
    {
        return $this->emailu;
    }

    public function setEmailu(?string $emailu): self
    {
        $this->emailu = $emailu;

        return $this;
    }

    
    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->emailu = $username;

        return $this;
    }


    public function getIdtypeu(): ?Typeu
    {
        return $this->idtypeu;
    }

    public function setIdtypeu(?Typeu $idtypeu): self
    {
        $this->idtypeu = $idtypeu;

        return $this;
    }

    public function getIdgroup(): ?Groupe
    {
        return $this->idgroup;
    }

    public function setIdgroup(?Groupe $idgroup): self
    {
        $this->idgroup = $idgroup;

        return $this;
    }

    public function getRoles()
    {
        return [];
    }
    public function getSalt()
    {
        return null;
    }
    public function eraseCredentials()
    {
    }
    public function getUserIdentifier()
    {
        return $this->iduser;
    }
}
