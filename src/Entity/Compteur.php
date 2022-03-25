<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compteur
 *
 * @ORM\Table(name="compteur")
 * @ORM\Entity
 */
class Compteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCOMPTEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompteur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMCLIENT", type="integer", nullable=true)
     */
    private $numclient = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMFRNS", type="integer", nullable=true)
     */
    private $numfrns = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMBL", type="integer", nullable=true)
     */
    private $numbl = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMNOTEACHAT", type="integer", nullable=true)
     */
    private $numnoteachat = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMFACTAVECTVA", type="integer", nullable=true)
     */
    private $numfactavectva = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMFACTSANTVA", type="integer", nullable=true)
     */
    private $numfactsantva = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMRECU", type="integer", nullable=true)
     */
    private $numrecu = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMVENTE", type="integer", nullable=true)
     */
    private $numvente = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMPROFORMA", type="integer", nullable=true)
     */
    private $numproforma = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMTICKET", type="integer", nullable=true)
     */
    private $numticket = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMBC", type="integer", nullable=true)
     */
    private $numbc = '0';


}
