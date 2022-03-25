<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chargefixe
 *
 * @ORM\Table(name="chargefixe")
 * @ORM\Entity
 */
class Chargefixe
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDChargeFixe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idchargefixe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=100, nullable=true)
     */
    private $libelle = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Montant", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $montant = '0.000000';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Select", type="boolean", nullable=true)
     */
    private $select = '0';


}
