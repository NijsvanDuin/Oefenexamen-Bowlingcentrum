<?php

$autoloadDir = dirname(__DIR__) . '/vendor/autoload.php';

if (!file_exists($autoloadDir)) {
  die('Please run "composer install" in the root directory.');
}

require_once $autoloadDir;

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();
$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS', 'URL_ROOT']);

require_once '../app/require.php';
