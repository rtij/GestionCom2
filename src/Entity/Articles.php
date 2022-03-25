<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="WDIDX16449206481", columns={"DESIGNATION"}), @ORM\Index(name="WDIDX16449206493", columns={"IDFAMILLE"}), @ORM\Index(name="WDIDX16449206505", columns={"IDFournisseur"}), @ORM\Index(name="WDIDX16449206482", columns={"FAIT"}), @ORM\Index(name="WDIDX16449206494", columns={"FAITDEPOT"}), @ORM\Index(name="WDIDX16449206470", columns={"CODEREF"})})
 * @ORM\Entity
 */
class Articles
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDARTICLES", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarticles;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODEREF", type="string", length=150, nullable=true)
     */
    private $coderef = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESIGNATION", type="string", length=200, nullable=true)
     */
    private $designation = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRU", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $pru = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PVU", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $pvu = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PHOTO", type="blob", length=0, nullable=true)
     */
    private $photo;

    /**
     * @var float|null
     *
     * @ORM\Column(name="STKMAG", type="float", precision=10, scale=0, nullable=true)
     */
    private $stkmag = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="STKDP1", type="float", precision=10, scale=0, nullable=true)
     */
    private $stkdp1 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="SEUILAPPRO", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $seuilappro = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="STKTOTAL", type="float", precision=10, scale=0, nullable=true)
     */
    private $stktotal = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FAIT", type="boolean", nullable=true)
     */
    private $fait = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDFAMILLE", type="integer", nullable=true)
     */
    private $idfamille = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FAITDEPOT", type="boolean", nullable=true)
     */
    private $faitdepot = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDFournisseur", type="integer", nullable=true)
     */
    private $idfournisseur = '0';


}
