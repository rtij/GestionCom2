<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Billetbanque
 *
 * @ORM\Table(name="billetbanque")
 * @ORM\Entity
 */
class Billetbanque
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDBilletbanque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbilletbanque;

    /**
     * @var float|null
     *
     * @ORM\Column(name="LIBELLE", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $libelle = 0.000;

    public function getIdbilletbanque(): ?int
    {
        return $this->idbilletbanque;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }


}
