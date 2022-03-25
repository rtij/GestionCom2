<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depenses
 *
 * @ORM\Table(name="depenses", indexes={@ORM\Index(name="WDIDX164492067031", columns={"MOIS"}), @ORM\Index(name="WDIDX164492066930", columns={"DATES"}), @ORM\Index(name="WDIDX164492067132", columns={"ANNEE"})})
 * @ORM\Entity
 */
class Depenses
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDDEPENSES", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddepenses;

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
     * @ORM\Column(name="MONTANT", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $montant = '0.000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="MOIS", type="integer", nullable=true)
     */
    private $mois = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ANNEE", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $annee = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TYPE", type="string", length=10, nullable=true)
     */
    private $type = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="DECLARER", type="boolean", nullable=true)
     */
    private $declarer = '0';


}
