<?php

namespace App\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table(name="abonnement", indexes={@ORM\Index(name="fk_abonnement_groupe", columns={"idgroup"}), @ORM\Index(name="fk_user_abonnement", columns={"idUser"})})
 * @ORM\Entity
 */
class Abonnement
{
    /**
     * @var int
     *
     * @ORM\Column(name="idabonnement", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idabonnement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbmois", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $nbmois = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="montant", type="float", precision=14, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $montant = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="refP", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $refp = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateP", type="date", nullable=false)
     */
    private $datep;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateF", type="date", nullable=false)
     */
    private $datef;

    /**
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idgroup", referencedColumnName="idgroup")
     * })
     */
    private $idgroup;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="idUser")
     * })
     */
    private $iduser;

    public function getIdabonnement(): ?string
    {
        return $this->idabonnement;
    }

    public function getNbmois(): ?int
    {
        return $this->nbmois;
    }

    public function setNbmois(?int $nbmois): self
    {
        $this->nbmois = $nbmois;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getRefp(): ?string
    {
        return $this->refp;
    }

    public function setRefp(?string $refp): self
    {
        $this->refp = $refp;

        return $this;
    }

    public function getDatep(): ?\DateTimeInterface
    {
        return $this->datep;
    }

    public function setDatep(\DateTimeInterface $datep): self
    {
        $this->datep = $datep;

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

    public function getIdgroup(): ?Groupe
    {
        return $this->idgroup;
    }

    public function setIdgroup(?Groupe $idgroup): self
    {
        $this->idgroup = $idgroup;

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
