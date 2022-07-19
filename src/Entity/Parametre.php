<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametre
 *
 * @ORM\Table(name="parametre")
 * @ORM\Entity
 */
class Parametre
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDparametre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idparametre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMSERVEUR", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nomserveur = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRINTERBL", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $printerbl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRINTERTICKET", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $printerticket = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="PORTAFFICHEUR", type="boolean", nullable=true)
     */
    private $portafficheur = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="PAPIERTICKET", type="smallint", nullable=true)
     */
    private $papierticket = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DisqueBackup", type="string", length=1, nullable=true, options={"default"="NULL"})
     */
    private $disquebackup = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TYPEAFFICHEUR", type="string", length=10, nullable=true, options={"default"="'0'"})
     */
    private $typeafficheur = '\'0\'';

    public function getIdparametre(): ?int
    {
        return $this->idparametre;
    }

    public function getNomserveur(): ?string
    {
        return $this->nomserveur;
    }

    public function setNomserveur(?string $nomserveur): self
    {
        $this->nomserveur = $nomserveur;

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

    public function getPrinterticket(): ?string
    {
        return $this->printerticket;
    }

    public function setPrinterticket(?string $printerticket): self
    {
        $this->printerticket = $printerticket;

        return $this;
    }

    public function getPortafficheur(): ?bool
    {
        return $this->portafficheur;
    }

    public function setPortafficheur(?bool $portafficheur): self
    {
        $this->portafficheur = $portafficheur;

        return $this;
    }

    public function getPapierticket(): ?int
    {
        return $this->papierticket;
    }

    public function setPapierticket(?int $papierticket): self
    {
        $this->papierticket = $papierticket;

        return $this;
    }

    public function getDisquebackup(): ?string
    {
        return $this->disquebackup;
    }

    public function setDisquebackup(?string $disquebackup): self
    {
        $this->disquebackup = $disquebackup;

        return $this;
    }

    public function getTypeafficheur(): ?string
    {
        return $this->typeafficheur;
    }

    public function setTypeafficheur(?string $typeafficheur): self
    {
        $this->typeafficheur = $typeafficheur;

        return $this;
    }


}
