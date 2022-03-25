<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cloturecaisse
 *
 * @ORM\Table(name="cloturecaisse", indexes={@ORM\Index(name="WDIDX164492067839", columns={"IDutilisateur"}), @ORM\Index(name="WDIDX164492067738", columns={"DATE"})})
 * @ORM\Entity
 */
class Cloturecaisse
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCLOTURECAISSE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcloturecaisse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE", type="date", nullable=true)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur = '0';


}
