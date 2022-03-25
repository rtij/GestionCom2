<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attente
 *
 * @ORM\Table(name="attente", indexes={@ORM\Index(name="WDIDX164492067334", columns={"NumVente"}), @ORM\Index(name="WDIDX164492067233", columns={"IDARTICLES"})})
 * @ORM\Entity
 */
class Attente
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="IDARTICLES", type="bigint", nullable=true)
     */
    private $idarticles = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="IDAttente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idattente;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NumVente", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $numvente = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="QTE", type="float", precision=10, scale=0, nullable=true)
     */
    private $qte = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRU", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $pru = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANT", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $montant = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PVU", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $pvu = '0.000000';


}
