<?php

declare(strict_types=1);

date_default_timezone_set('Europe/Berlin');

define('BASE_PATH', dirname(__DIR__));

spl_autoload_register(function (string $class): void {
    $class = str_replace('\\', '/', $class);
    $file = BASE_PATH . '/src/' . $class . '.php';

    if (!file_exists($file)) {
        throw new RuntimeException("Class file not found: $file");
    }

    require_once $file;
});

session_start();
