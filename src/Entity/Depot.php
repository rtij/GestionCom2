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
     * @ORM\Column(name="NOMDEPOT", type="string", length=50, nullable=true)
     */
    private $nomdepot = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE", type="string", length=200, nullable=true)
     */
    private $adresse = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESIGNATION", type="string", length=50, nullable=true)
     */
    private $designation = '';


}
