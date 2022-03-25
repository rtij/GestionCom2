<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur", indexes={@ORM\Index(name="WDIDX164492065614", columns={"NOMFRNS"})})
 * @ORM\Entity
 */
class Fournisseur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDFournisseur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfournisseur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMFRNS", type="string", length=50, nullable=true)
     */
    private $nomfrns = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE", type="text", length=0, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELEPHONE", type="text", length=0, nullable=true)
     */
    private $telephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COMPTEFRNS", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $comptefrns = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NIF", type="string", length=20, nullable=true)
     */
    private $nif = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="STAT", type="string", length=20, nullable=true)
     */
    private $stat = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="RCS", type="string", length=20, nullable=true)
     */
    private $rcs = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CIF", type="string", length=50, nullable=true)
     */
    private $cif = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="YMAIL", type="string", length=80, nullable=true)
     */
    private $ymail = '';


}
