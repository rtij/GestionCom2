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

    public function getIdcompteur(): ?int
    {
        return $this->idcompteur;
    }

    public function getNumclient(): ?int
    {
        return $this->numclient;
    }

    public function setNumclient(?int $numclient): self
    {
        $this->numclient = $numclient;

        return $this;
    }

    public function getNumfrns(): ?int
    {
        return $this->numfrns;
    }

    public function setNumfrns(?int $numfrns): self
    {
        $this->numfrns = $numfrns;

        return $this;
    }

    public function getNumbl(): ?int
    {
        return $this->numbl;
    }

    public function setNumbl(?int $numbl): self
    {
        $this->numbl = $numbl;

        return $this;
    }

    public function getNumnoteachat(): ?int
    {
        return $this->numnoteachat;
    }

    public function setNumnoteachat(?int $numnoteachat): self
    {
        $this->numnoteachat = $numnoteachat;

        return $this;
    }

    public function getNumfactavectva(): ?int
    {
        return $this->numfactavectva;
    }

    public function setNumfactavectva(?int $numfactavectva): self
    {
        $this->numfactavectva = $numfactavectva;

        return $this;
    }

    public function getNumfactsantva(): ?int
    {
        return $this->numfactsantva;
    }

    public function setNumfactsantva(?int $numfactsantva): self
    {
        $this->numfactsantva = $numfactsantva;

        return $this;
    }

    public function getNumrecu(): ?int
    {
        return $this->numrecu;
    }

    public function setNumrecu(?int $numrecu): self
    {
        $this->numrecu = $numrecu;

        return $this;
    }

    public function getNumvente(): ?int
    {
        return $this->numvente;
    }

    public function setNumvente(?int $numvente): self
    {
        $this->numvente = $numvente;

        return $this;
    }

    public function getNumproforma(): ?int
    {
        return $this->numproforma;
    }

    public function setNumproforma(?int $numproforma): self
    {
        $this->numproforma = $numproforma;

        return $this;
    }

    public function getNumticket(): ?int
    {
        return $this->numticket;
    }

    public function setNumticket(?int $numticket): self
    {
        $this->numticket = $numticket;

        return $this;
    }

    public function getNumbc(): ?int
    {
        return $this->numbc;
    }

    public function setNumbc(?int $numbc): self
    {
        $this->numbc = $numbc;

        return $this;
    }


}
