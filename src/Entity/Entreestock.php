<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreestock
 *
 * @ORM\Table(name="entreestock", indexes={@ORM\Index(name="WDIDX164492066121", columns={"IDFournisseur"}), @ORM\Index(name="WDIDX164492065917", columns={"IDARTICLES"}), @ORM\Index(name="WDIDX164492066019", columns={"PEREMPTION"}), @ORM\Index(name="WDIDX164492066120", columns={"VU"}), @ORM\Index(name="WDIDX164492065916", columns={"DATES"}), @ORM\Index(name="WDIDX164492066018", columns={"IDDEPOT"})})
 * @ORM\Entity
 */
class Entreestock
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDENTREESTOCK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identreestock;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATES", type="date", nullable=true)
     */
    private $dates;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRU", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $pru = '0.000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="QTE", type="float", precision=10, scale=0, nullable=true)
     */
    private $qte = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMBL", type="string", length=15, nullable=true)
     */
    private $numbl = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMFACTFRNS", type="string", length=15, nullable=true)
     */
    private $numfactfrns = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDARTICLES", type="bigint", nullable=true)
     */
    private $idarticles = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PVU", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $pvu = '0.000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDDEPOT", type="integer", nullable=true)
     */
    private $iddepot = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PEREMPTION", type="date", nullable=true)
     */
    private $peremption;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="VU", type="boolean", nullable=true)
     */
    private $vu = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDFournisseur", type="integer", nullable=true)
     */
    private $idfournisseur = '0';


}
