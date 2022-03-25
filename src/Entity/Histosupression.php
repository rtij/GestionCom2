<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Histosupression
 *
 * @ORM\Table(name="histosupression", indexes={@ORM\Index(name="WDIDX164492069252", columns={"IDARTICLES"}), @ORM\Index(name="WDIDX164492069251", columns={"DATESupp"}), @ORM\Index(name="WDIDX164492069353", columns={"IDutilisateur"})})
 * @ORM\Entity
 */
class Histosupression
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDHISTOSUPRESSION", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistosupression;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMVENTE", type="integer", nullable=true)
     */
    private $numvente = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATESupp", type="date", nullable=true)
     */
    private $datesupp;

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
     * @ORM\Column(name="PVU", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $pvu = '0.000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDARTICLES", type="bigint", nullable=true)
     */
    private $idarticles = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HEURE", type="time", nullable=true, options={"default"="00:00:00"})
     */
    private $heure = '00:00:00';


}
