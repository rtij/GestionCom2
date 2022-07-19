<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paramsociete
 *
 * @ORM\Table(name="paramsociete")
 * @ORM\Entity
 */
class Paramsociete
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDPARAMSOCIETE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idparamsociete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMSOCIETE", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nomsociete = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="RAISONSOCIALE", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $raisonsociale = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELEPHONE", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $telephone = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $adresse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="YMAIL", type="string", length=80, nullable=true, options={"default"="NULL"})
     */
    private $ymail = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NIF", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $nif = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CIF", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $cif = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="RCS", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $rcs = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="STAT", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $stat = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOGO", type="blob", length=0, nullable=true, options={"default"="NULL"})
     */
    private $logo = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TAUXTVA", type="float", precision=10, scale=0, nullable=true)
     */
    private $tauxtva = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TAUXCARTEBQ", type="float", precision=10, scale=0, nullable=true)
     */
    private $tauxcartebq = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="HDDBACKUP", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $hddbackup = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSEFACT", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $adressefact = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="RESPONSABLE", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $responsable = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="SIGNATAIRE", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $signataire = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRINTERTICKET", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $printerticket = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRINTERBL", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $printerbl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CONDITION", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $condition = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="REMARQUE1", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $remarque1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="REMARQUE2", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $remarque2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PASSEWORDMAIL", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $passewordmail = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ASSUJETIALATVA", type="boolean", nullable=true)
     */
    private $assujetialatva = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Alertedlc", type="smallint", nullable=true)
     */
    private $alertedlc = '0';

    public function getIdparamsociete(): ?int
    {
        return $this->idparamsociete;
    }

    public function getNomsociete(): ?string
    {
        return $this->nomsociete;
    }

    public function setNomsociete(?string $nomsociete): self
    {
        $this->nomsociete = $nomsociete;

        return $this;
    }

    public function getRaisonsociale(): ?string
    {
        return $this->raisonsociale;
    }

    public function setRaisonsociale(?string $raisonsociale): self
    {
        $this->raisonsociale = $raisonsociale;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getNif(): ?string
    {
        return $this->nif;
    }

    public function setNif(?string $nif): self
    {
        $this->nif = $nif;

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

    public function getRcs(): ?string
    {
        return $this->rcs;
    }

    public function setRcs(?string $rcs): self
    {
        $this->rcs = $rcs;

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

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getTauxtva(): ?float
    {
        return $this->tauxtva;
    }

    public function setTauxtva(?float $tauxtva): self
    {
        $this->tauxtva = $tauxtva;

        return $this;
    }

    public function getTauxcartebq(): ?float
    {
        return $this->tauxcartebq;
    }

    public function setTauxcartebq(?float $tauxcartebq): self
    {
        $this->tauxcartebq = $tauxcartebq;

        return $this;
    }

    public function getHddbackup(): ?string
    {
        return $this->hddbackup;
    }

    public function setHddbackup(?string $hddbackup): self
    {
        $this->hddbackup = $hddbackup;

        return $this;
    }

    public function getAdressefact(): ?string
    {
        return $this->adressefact;
    }

    public function setAdressefact(?string $adressefact): self
    {
        $this->adressefact = $adressefact;

        return $this;
    }

    public function getResponsable(): ?string
    {
        return $this->responsable;
    }

    public function setResponsable(?string $responsable): self
    {
        $this->responsable = $responsable;

        return $this;
    }

    public function getSignataire(): ?string
    {
        return $this->signataire;
    }

    public function setSignataire(?string $signataire): self
    {
        $this->signataire = $signataire;

        return $this;
    }

    public function getPrinterticket(): ?string
    {
        return $this->printerticket;
    }

    public function setPrinterticket(?string $printerticket): self
    {
        $this->printerticket = $printerticket;

        return $this;
    }

    public function getPrinterbl(): ?string
    {
        return $this->printerbl;
    }

    public function setPrinterbl(?string $printerbl): self
    {
        $this->printerbl = $printerbl;

        return $this;
    }

    public function getCondition(): ?string
    {
        return $this->condition;
    }

    public function setCondition(?string $condition): self
    {
        $this->condition = $condition;

        return $this;
    }

    public function getRemarque1(): ?string
    {
        return $this->remarque1;
    }

    public function setRemarque1(?string $remarque1): self
    {
        $this->remarque1 = $remarque1;

        return $this;
    }

    public function getRemarque2(): ?string
    {
        return $this->remarque2;
    }

    public function setRemarque2(?string $remarque2): self
    {
        $this->remarque2 = $remarque2;

        return $this;
    }

    public function getPassewordmail(): ?string
    {
        return $this->passewordmail;
    }

    public function setPassewordmail(?string $passewordmail): self
    {
        $this->passewordmail = $passewordmail;

        return $this;
    }

    public function getAssujetialatva(): ?bool
    {
        return $this->assujetialatva;
    }

    public function setAssujetialatva(?bool $assujetialatva): self
    {
        $this->assujetialatva = $assujetialatva;

        return $this;
    }

    public function getAlertedlc(): ?int
    {
        return $this->alertedlc;
    }

    public function setAlertedlc(?int $alertedlc): self
    {
        $this->alertedlc = $alertedlc;

        return $this;
    }


}
