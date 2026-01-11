<?php

require_once __DIR__ . '/../config/config.inc.php';

use App\Vehicle\Fahrzeug;
use App\Vehicle\PKW;

$farhzeug = new PKW('hufks');
print_r($farhzeug);

include_once __DIR__ . '/../templates/template.php';
