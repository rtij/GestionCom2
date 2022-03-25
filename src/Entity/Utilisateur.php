<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="Nom", columns={"Nom"})}, indexes={@ORM\Index(name="WDIDX164492065715", columns={"IDtype_user"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idutilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom", type="string", length=50, nullable=true)
     */
    private $nom = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Motdepasse", type="string", length=50, nullable=true)
     */
    private $motdepasse = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDtype_user", type="bigint", nullable=true)
     */
    private $idtypeUser = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Superviseur", type="boolean", nullable=true)
     */
    private $superviseur = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="MotdepasseÃ saisir", type="boolean", nullable=true)
     */
    private $motdepasseã saisir = '0';


}
