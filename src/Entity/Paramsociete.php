<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paramsociete
 *
 * @ORM\Table(name="paramsociete")
 * @ORM\Entity
 */
class Paramsociete
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDPARAMSOCIETE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idparamsociete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMSOCIETE", type="string", length=50, nullable=true)
     */
    private $nomsociete = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="RAISONSOCIALE", type="string", length=50, nullable=true)
     */
    private $raisonsociale = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELEPHONE", type="text", length=0, nullable=true)
     */
    private $telephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE", type="text", length=0, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="YMAIL", type="string", length=80, nullable=true)
     */
    private $ymail = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NIF", type="string", length=20, nullable=true)
     */
    private $nif = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CIF", type="string", length=50, nullable=true)
     */
    private $cif = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="RCS", type="string", length=20, nullable=true)
     */
    private $rcs = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="STAT", type="string", length=20, nullable=true)
     */
    private $stat = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOGO", type="blob", length=0, nullable=true)
     */
    private $logo;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TAUXTVA", type="float", precision=10, scale=0, nullable=true)
     */
    private $tauxtva = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TAUXCARTEBQ", type="float", precision=10, scale=0, nullable=true)
     */
    private $tauxcartebq = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="HDDBACKUP", type="string", length=10, nullable=true)
     */
    private $hddbackup = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSEFACT", type="string", length=300, nullable=true)
     */
    private $adressefact = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="RESPONSABLE", type="string", length=50, nullable=true)
     */
    private $responsable = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="SIGNATAIRE", type="string", length=50, nullable=true)
     */
    private $signataire = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRINTERTICKET", type="string", length=50, nullable=true)
     */
    private $printerticket = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRINTERBL", type="string", length=50, nullable=true)
     */
    private $printerbl = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CONDITION", type="string", length=50, nullable=true)
     */
    private $condition = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="REMARQUE1", type="string", length=300, nullable=true)
     */
    private $remarque1 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="REMARQUE2", type="string", length=300, nullable=true)
     */
    private $remarque2 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PASSEWORDMAIL", type="string", length=50, nullable=true)
     */
    private $passewordmail = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ASSUJETIALATVA", type="boolean", nullable=true)
     */
    private $assujetialatva = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Alertedlc", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $alertedlc = '0';


}
