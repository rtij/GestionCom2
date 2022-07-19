<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depot
 *
 * @ORM\Table(name="depot")
 * @ORM\Entity
 */
class Depot
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDDEPOT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddepot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMDEPOT", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nomdepot = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $adresse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESIGNATION", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $designation = 'NULL';

    public function getIddepot(): ?int
    {
        return $this->iddepot;
    }

    public function getNomdepot(): ?string
    {
        return $this->nomdepot;
    }

    public function setNomdepot(?string $nomdepot): self
    {
        $this->nomdepot = $nomdepot;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }


}
