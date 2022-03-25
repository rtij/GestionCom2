<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", indexes={@ORM\Index(name="WDIDX164492065513", columns={"NOMCLIENT"})})
 * @ORM\Entity
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDClient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMCLIENT", type="string", length=50, nullable=true)
     */
    private $nomclient = '';

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
     * @ORM\Column(name="YMAIL", type="string", length=80, nullable=true)
     */
    private $ymail = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="COMPTECLI", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $comptecli = '0.000000';

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
     * @ORM\Column(name="CIF", type="string", length=50, nullable=true)
     */
    private $cif = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="RCS", type="string", length=20, nullable=true)
     */
    private $rcs = '';


}
