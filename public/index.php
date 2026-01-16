<?php

require_once __DIR__ . '/../config/config.inc.php';

use App\Vehicle\PKW;
use App\Parking\Parkplatz;
use App\Vehicle\Motorrad;
use App\Vehicle\Transporter;


if (!isset($_SESSION['parkplatz'])) {
    $_SESSION['parkplatz'] = new Parkplatz();
}

$action = isset($_GET['a']) ? trim($_GET['a']) : null;

switch($action) {
    case 'add':
        $kennzeichen = isset($_POST['kennzeichen']) ? trim($_POST['kennzeichen']): null;
        $typ =  isset($_POST['typ']) ? trim($_POST['typ']): null;

        $f = match(strtolower($typ)) {
            'pkw' => new Pkw($kennzeichen),
            'motorrad' => new Motorrad($kennzeichen),
            'transporter' => new Transporter($kennzeichen)
        };

        $_SESSION['parkplatz']->add($f);
        print_r($_SESSION['parkplatz']->getFahrzeuge());
        break;
}

include_once __DIR__ . '/../templates/template.php';
