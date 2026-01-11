<?php
namespace App\Vehicle;

class Motorrad extends Fahrzeug {
   public function __construct(string $kennzeichen, ?int $parkenStart = null, $parkNummer = null)
    {
        $parkNummer = 'C-' . random_int(1, 200);
        parent::__construct($kennzeichen,'Motorrad', $parkenStart, $parkNummer);
    }
}
