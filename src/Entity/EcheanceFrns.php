<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcheanceFrns
 *
 * @ORM\Table(name="echeance_frns", indexes={@ORM\Index(name="WDIDX164492069555", columns={"NUMFACT"}), @ORM\Index(name="WDIDX164492069554", columns={"IDFournisseur"}), @ORM\Index(name="WDIDX164492069656", columns={"DATE_ECHEANCE"})})
 * @ORM\Entity
 */
class EcheanceFrns
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDECHEANCE_FRNS", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idecheanceFrns;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDFournisseur", type="integer", nullable=true)
     */
    private $idfournisseur = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMFACT", type="string", length=15, nullable=true)
     */
    private $numfact = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_ECHEANCE", type="date", nullable=true)
     */
    private $dateEcheance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANT", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $montant = '0.000000';


}
