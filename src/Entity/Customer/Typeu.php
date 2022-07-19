<?php

namespace App\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * Typeu
 *
 * @ORM\Table(name="typeu")
 * @ORM\Entity
 */
class Typeu
{
    /**
     * @var int
     *
     * @Groups("post:read")
     * @ORM\Column(name="idTypeu", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeu;

    /**
     * @var string
     *
     * @Groups("post:read")
     * @ORM\Column(name="designation", type="string", length=255, nullable=false)
     */
    private $designation;

    public function getIdtypeu(): ?int
    {
        return $this->idtypeu;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }


}
