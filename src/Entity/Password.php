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
     * @ORM\Column(name="Motdepasse", type="string", length=50, nullable=true)
     */
    private $motdepasse = '';


}
