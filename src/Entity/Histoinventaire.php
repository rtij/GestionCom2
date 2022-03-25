<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Histoinventaire
 *
 * @ORM\Table(name="histoinventaire", indexes={@ORM\Index(name="WDIDX164492067536", columns={"DATES"}), @ORM\Index(name="WDIDX164492067535", columns={"IDARTICLES"}), @ORM\Index(name="WDIDX164492067637", columns={"MAGDEPOT"})})
 * @ORM\Entity
 */
class Histoinventaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDHISTOINVENTAIRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistoinventaire;

    /**
     * @var float|null
     *
     * @ORM\Column(name="STKTHEO", type="float", precision=10, scale=0, nullable=true)
     */
    private $stktheo = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="STKPHYS", type="float", precision=10, scale=0, nullable=true)
     */
    private $stkphys = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDARTICLES", type="bigint", nullable=true)
     */
    private $idarticles = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATES", type="date", nullable=true)
     */
    private $dates;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAGDEPOT", type="string", length=50, nullable=true)
     */
    private $magdepot = '';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ECART", type="float", precision=10, scale=0, nullable=true)
     */
    private $ecart = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="OBSERVATION", type="text", length=0, nullable=true)
     */
    private $observation;


}
