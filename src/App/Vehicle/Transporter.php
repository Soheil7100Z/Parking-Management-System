<?php
namespace App\Vehicle;

class Transporter extends Fahrzeug {
  public function __construct(string $kennzeichen, ?int $parkenStart = null, $parkNummer = null)
    {
        $parkNummer = 'B-' . random_int(1, 500);
        parent::__construct($kennzeichen,'Transporter', $parkenStart, $parkNummer);
    }
}
