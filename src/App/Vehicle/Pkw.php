<?php
namespace App\Vehicle;

class Pkw extends Fahrzeug {
   public function __construct(string $kennzeichen, ?int $parkenStart = null, $parkNummer = null)
    {
        $parkNummer = 'A-' . random_int(1, 999);
        parent::__construct($kennzeichen,'PKW', $parkenStart, $parkNummer);
    }
}
