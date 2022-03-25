<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famille
 *
 * @ORM\Table(name="famille", indexes={@ORM\Index(name="WDIDX164492065512", columns={"AFFICHER"}), @ORM\Index(name="WDIDX164492065411", columns={"LIBELLE"})})
 * @ORM\Entity
 */
class Famille
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDFamille", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfamille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=20, nullable=true)
     */
    private $libelle = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AFFICHER", type="boolean", nullable=true)
     */
    private $afficher = '0';


}
