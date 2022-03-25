<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfigDroit
 *
 * @ORM\Table(name="config_droit", indexes={@ORM\Index(name="WDIDX164492070260", columns={"IDutilisateur"})})
 * @ORM\Entity
 */
class ConfigDroit
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDconfig_droit", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconfigDroit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_int", type="string", length=50, nullable=true)
     */
    private $nomInt = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Etat_int", type="boolean", nullable=true)
     */
    private $etatInt = '0';


}
