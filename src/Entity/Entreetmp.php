<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreetmp
 *
 * @ORM\Table(name="entreetmp", indexes={@ORM\Index(name="WDIDX164492066828", columns={"IDFamille"}), @ORM\Index(name="WDIDX164492066727", columns={"IDARTICLES"}), @ORM\Index(name="WDIDX164492066829", columns={"IDFournisseur"})})
 * @ORM\Entity
 */
class Entreetmp
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDENTREETMP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identreetmp;

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
     * @var float|null
     *
     * @ORM\Column(name="QTE", type="float", precision=10, scale=0, nullable=true)
     */
    private $qte = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMFACTFRNS", type="integer", nullable=true)
     */
    private $numfactfrns = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMBL", type="integer", nullable=true)
     */
    private $numbl = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDARTICLES", type="bigint", nullable=true)
     */
    private $idarticles = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDFamille", type="integer", nullable=true)
     */
    private $idfamille = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDFournisseur", type="integer", nullable=true)
     */
    private $idfournisseur = '0';

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
     * @var string|null
     *
     * @ORM\Column(name="MONTANT", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $montant = '0.000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="SEUILAPPRO", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $seuilappro = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PEREMPTION", type="date", nullable=true)
     */
    private $peremption;


}
