<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detailsortie
 *
 * @ORM\Table(name="detailsortie", indexes={@ORM\Index(name="WDIDX16449206517", columns={"IDutilisateur"}), @ORM\Index(name="WDIDX16449206539", columns={"IDDEPOT"}), @ORM\Index(name="WDIDX16449206516", columns={"IDARTICLES"}), @ORM\Index(name="WDIDX16449206528", columns={"IDCLIENT"}), @ORM\Index(name="WDIDX164492065310", columns={"IDVENTE"})})
 * @ORM\Entity
 */
class Detailsortie
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDDETAILVENTE", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddetailvente;

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
     * @var string|null
     *
     * @ORM\Column(name="MARGE", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $marge = '0.000000';

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
     * @var int|null
     *
     * @ORM\Column(name="IDCLIENT", type="integer", nullable=true)
     */
    private $idclient = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDDEPOT", type="integer", nullable=true)
     */
    private $iddepot = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDVENTE", type="bigint", nullable=true)
     */
    private $idvente = '0';


}
