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
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $libelle = '0.000000';


}
