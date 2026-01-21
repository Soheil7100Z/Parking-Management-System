<?php
namespace App\Vehicle;

class Fahrzeug {

    private String $kennzeichen;
    private int $parkenStart;
    private int $parkenEnde;
    protected $parkNummer;
    protected string $type;

    public function __construct(string $kennzeichen, string $type, ?int $parkenStart = null, $parkNummer = null)
    {
        $this->kennzeichen = $kennzeichen;
        $this->parkenStart = $parkenStart ?? time();
        $this->type = $type;
        $this->parkNummer = $parkNummer ?? 123;
    }

    public function getKennzeichen()
    {
        return $this->kennzeichen;
    }

    public function getParkenStart()
    {
        return $this->parkenStart;
    }

    public function getParkenEnde()
    {
        return $this->parkenEnde;
    }

    public function setParkenEnde($parkenEnde)
    {
        $this->parkenEnde = $parkenEnde;
    }

    public function getParkdauer(): int
    {
        return $this->parkenEnde - $this->parkenStart;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getParkNummer()
    {
        return $this->parkNummer;
    }
}
