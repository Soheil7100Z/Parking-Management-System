<?php

require_once __DIR__ . '/../config/config.inc.php';

use App\Vehicle\Fahrzeug;

$farhzeug = new Fahrzeug('hufks' , 'PKW');
print_r($farhzeug);

include_once __DIR__ . '/../templates/template.php';
