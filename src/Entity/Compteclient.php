<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compteclient
 *
 * @ORM\Table(name="compteclient", indexes={@ORM\Index(name="WDIDX164492066626", columns={"DATES"}), @ORM\Index(name="WDIDX164492066625", columns={"IDClient"})})
 * @ORM\Entity
 */
class Compteclient
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="IDClient", type="integer", nullable=true)
     */
    private $idclient = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="IDCOMPTECLIENT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompteclient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMVENTE", type="integer", nullable=true)
     */
    private $numvente = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CREDIT", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $credit = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DEBIT", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $debit = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=100, nullable=true)
     */
    private $libelle = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MODEPAIEMENT", type="string", length=50, nullable=true)
     */
    private $modepaiement = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATES", type="date", nullable=true)
     */
    private $dates;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SOLDE", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $solde = '0.000000';


}
