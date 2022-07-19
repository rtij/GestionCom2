<?php

namespace App\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="fk_user_typeu", columns={"idTypeu"}), @ORM\Index(name="fk_users_groupe", columns={"idgroup"})})
 * @ORM\Entity
 */
class Users implements UserInterface
{
    /**
     * @var int
     *
     * @Groups("post:read")
     * @ORM\Column(name="idUser", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var string
     *
     * @Groups("post:read")
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string|null
     *
     * @Groups("post:read")
     * @ORM\Column(name="emailu", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $emailu = 'NULL';

    /**
     * @var string
     *
     * @Groups("post:read")
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string|null
     *
     * @Groups("post:read")
     * @ORM\Column(name="photo", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $photo = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @Groups("post:read")
     * @ORM\Column(name="createdAt", type="date", nullable=true, options={"default"="NULL"})
     */
    private $createdat;

    /**
     * @var bool|null
     *
     * @Groups("post:read")
     * @ORM\Column(name="useDark", type="boolean", nullable=true)
     */
    private $usedark = false;

    /**
     * @var \Typeu
     *
     * @Groups("post:read")
     * @ORM\ManyToOne(targetEntity="Typeu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTypeu", referencedColumnName="idTypeu")
     * })
     */
    private $idtypeu;

    /**
     * @var bool|null
     *
     * @Groups("post:read")
     * @ORM\Column(name="isSup", type="boolean", nullable=true)
     */
    private $issup = false;

    /**
     * @var \Groupe
     *
     * @Groups("post:read")
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idgroup", referencedColumnName="idgroup")
     * })
     */
    private $idgroup;

    public function getIssup(): bool
    {
        return $this->issup;
    }

    public function setIssup(bool $issup) : self{
        $this->issup = $issup;
        return $this;
    }

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

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getCreatedat(): ?\DateTimeInterface
    {
        return $this->createdat;
    }

    public function setCreatedat(?\DateTimeInterface $createdat): self
    {
        $this->createdat = $createdat;

        return $this;
    }

    public function getUsedark(): ?bool
    {
        return $this->usedark;
    }

    public function setUsedark(?bool $usedark): self
    {
        $this->usedark = $usedark;

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
        
    }

    public function eraseCredentials()
    {
        
    }

    public function getUserIdentifier()
    {
        return $this->username;
    }

}
