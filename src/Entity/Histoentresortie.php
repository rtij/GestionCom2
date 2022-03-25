<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Histoentresortie
 *
 * @ORM\Table(name="histoentresortie", indexes={@ORM\Index(name="WDIDX164492066223", columns={"DATES"}), @ORM\Index(name="WDIDX164492066222", columns={"IDARTICLES"}), @ORM\Index(name="WDIDX164492066324", columns={"MAGDEPOT"})})
 * @ORM\Entity
 */
class Histoentresortie
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDHISTOENTRESORTIE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistoentresortie;

    /**
     * @var float
     *
     * @ORM\Column(name="QTEENTREE", type="float", precision=10, scale=0, nullable=false)
     */
    private $qteentree = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="QTESORTIE", type="float", precision=10, scale=0, nullable=false)
     */
    private $qtesortie = '0';

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
     * @ORM\Column(name="LIBELLE", type="string", length=100, nullable=true)
     */
    private $libelle = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMBL", type="string", length=15, nullable=true)
     */
    private $numbl = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMFACT", type="string", length=15, nullable=true)
     */
    private $numfact = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAGDEPOT", type="string", length=50, nullable=true)
     */
    private $magdepot = '';

    /**
     * @var float
     *
     * @ORM\Column(name="QTESTOCK", type="float", precision=10, scale=0, nullable=false)
     */
    private $qtestock = '0';


}
