<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeUser
 *
 * @ORM\Table(name="type_user")
 * @ORM\Entity
 */
class TypeUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDtype_user", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libellÃ©", type="string", length=50, nullable=true)
     */
    private $libellã© = '';


}
