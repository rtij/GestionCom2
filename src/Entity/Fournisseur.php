<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur", indexes={@ORM\Index(name="NOMFRNS", columns={"NOMFRNS"})})
 * @ORM\Entity
 */
class Fournisseur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDFournisseur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfournisseur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMFRNS", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nomfrns = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $adresse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELEPHONE", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $telephone = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="COMPTEFRNS", type="decimal", precision=24, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $comptefrns = 0.000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NIF", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $nif = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="STAT", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $stat = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="RCS", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $rcs = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CIF", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $cif = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="YMAIL", type="string", length=80, nullable=true, options={"default"="NULL"})
     */
    private $ymail = 'NULL';
    
    /**
     * @var bool|null
     *
     * @ORM\Column(name="issup", type="boolean", nullable=true)
     */
    private $issup = false;
    
    public function getIdfournisseur(): ?int
    {
        return $this->idfournisseur;
    }

    public function getNomfrns(): ?string
    {
        return $this->nomfrns;
    }

    public function setNomfrns(?string $nomfrns): self
    {
        $this->nomfrns = $nomfrns;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getComptefrns(): ?float
    {
        return $this->comptefrns;
    }

    public function setComptefrns(?float $comptefrns): self
    {
        $this->comptefrns = $comptefrns;

        return $this;
    }

    public function getNif(): ?string
    {
        return $this->nif;
    }

    public function setNif(?string $nif): self
    {
        $this->nif = $nif;

        return $this;
    }

    public function getStat(): ?string
    {
        return $this->stat;
    }

    public function setStat(?string $stat): self
    {
        $this->stat = $stat;

        return $this;
    }

    public function getRcs(): ?string
    {
        return $this->rcs;
    }

    public function setRcs(?string $rcs): self
    {
        $this->rcs = $rcs;

        return $this;
    }

    public function getCif(): ?string
    {
        return $this->cif;
    }

    public function setCif(?string $cif): self
    {
        $this->cif = $cif;

        return $this;
    }

    public function getYmail(): ?string
    {
        return $this->ymail;
    }

    public function setYmail(?string $ymail): self
    {
        $this->ymail = $ymail;

        return $this;
    }

    public function getIssup(): bool
    {
        return $this->issup;
    }

    public function setIssup(bool $issup): self
    {
        $this->issup = $issup;
        return $this;
    }
}
