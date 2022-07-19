<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Password
 *
 * @ORM\Table(name="password")
 * @ORM\Entity
 */
class Password
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDpassword", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpassword;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Motdepasse", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $motdepasse = 'NULL';

    public function getIdpassword(): ?int
    {
        return $this->idpassword;
    }

    public function getMotdepasse(): ?string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(?string $motdepasse): self
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }


}
