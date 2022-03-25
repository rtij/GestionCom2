<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vente
 *
 * @ORM\Table(name="vente", indexes={@ORM\Index(name="WDIDX164492068243", columns={"IDutilisateur"}), @ORM\Index(name="WDIDX164492068445", columns={"MOIS"}), @ORM\Index(name="WDIDX164492068141", columns={"DATESVENTE"}), @ORM\Index(name="WDIDX164492068142", columns={"TYPEVENTE"}), @ORM\Index(name="WDIDX164492068344", columns={"IDCLIENT"}), @ORM\Index(name="WDIDX164492068546", columns={"ANNEE"}), @ORM\Index(name="WDIDX164492068040", columns={"NUMVENTE"})})
 * @ORM\Entity
 */
class Vente
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDVENTE", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvente;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMVENTE", type="integer", nullable=true)
     */
    private $numvente = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATESVENTE", type="date", nullable=true)
     */
    private $datesvente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MARGE", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $marge = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TYPEVENTE", type="string", length=10, nullable=true)
     */
    private $typevente = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMCLIENT", type="string", length=100, nullable=true)
     */
    private $nomclient = '';

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
     * @var string|null
     *
     * @ORM\Column(name="MODEPAIEMENT", type="string", length=50, nullable=true)
     */
    private $modepaiement = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="REFPAIEMENT", type="string", length=200, nullable=true)
     */
    private $refpaiement = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANT", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $montant = '0.000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="MOIS", type="integer", nullable=true)
     */
    private $mois = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ANNEE", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $annee = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MOISLETTRE", type="string", length=10, nullable=true)
     */
    private $moislettre = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HEURE", type="time", nullable=true, options={"default"="00:00:00"})
     */
    private $heure = '00:00:00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONNAIE", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $monnaie = '0.000000';


}
