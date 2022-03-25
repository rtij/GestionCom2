<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comptefrn
 *
 * @ORM\Table(name="comptefrn", indexes={@ORM\Index(name="WDIDX164492068748", columns={"IDFOURNISSEUR"}), @ORM\Index(name="WDIDX164492068950", columns={"NUMFACT"}), @ORM\Index(name="WDIDX164492068647", columns={"NUMBL"}), @ORM\Index(name="WDIDX164492068849", columns={"DATES"})})
 * @ORM\Entity
 */
class Comptefrn
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCOMPTEFRN", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomptefrn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMBL", type="string", length=15, nullable=true)
     */
    private $numbl = '0';

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
     * @var int|null
     *
     * @ORM\Column(name="IDFOURNISSEUR", type="integer", nullable=true)
     */
    private $idfournisseur = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATES", type="date", nullable=true)
     */
    private $dates;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMFACT", type="string", length=15, nullable=true)
     */
    private $numfact = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="SOLDE", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $solde = '0.000000';


}
