<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcheanceClient
 *
 * @ORM\Table(name="echeance_client", indexes={@ORM\Index(name="WDIDX164492069958", columns={"DATE_ECHEANCE"}), @ORM\Index(name="WDIDX164492069959", columns={"IDCLIENT"}), @ORM\Index(name="WDIDX164492069857", columns={"NUMVENTE"})})
 * @ORM\Entity
 */
class EcheanceClient
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDECHEANCE_CLIENT", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idecheanceClient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMVENTE", type="integer", nullable=true)
     */
    private $numvente = '0';

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

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDCLIENT", type="integer", nullable=true)
     */
    private $idclient = '0';


}
