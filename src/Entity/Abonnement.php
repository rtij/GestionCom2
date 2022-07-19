<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table(name="abonnement", indexes={@ORM\Index(name="Validite", columns={"Validite"}), @ORM\Index(name="Tolerance", columns={"Tolerance"})})
 * @ORM\Entity
 */
class Abonnement
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDabonnement", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idabonnement;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Validite", type="date", nullable=true, options={"default"="NULL"})
     */
    private $validite = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Tolerance", type="date", nullable=true, options={"default"="NULL"})
     */
    private $tolerance = 'NULL';

    public function getIdabonnement(): ?string
    {
        return $this->idabonnement;
    }

    public function getValidite(): ?\DateTimeInterface
    {
        return $this->validite;
    }

    public function setValidite(?\DateTimeInterface $validite): self
    {
        $this->validite = $validite;

        return $this;
    }

    public function getTolerance(): ?\DateTimeInterface
    {
        return $this->tolerance;
    }

    public function setTolerance(?\DateTimeInterface $tolerance): self
    {
        $this->tolerance = $tolerance;

        return $this;
    }


}
