#!/usr/bin/php
<?php

if (!file_exists('vendor/autoload.php')) {
    die('Autoload needed to use this application');
}

require_once('vendor/autoload.php');

use Core\HotelManager;

define('APP_PATH', realpath(__DIR__));
define('DEFAULT_OUTPUT_DIRECTORY', 'output');

$options = getopt("o:v:f:", []);

$vendor = $options['v'] ?? 'all';
$output = $options['o'] ?? APP_PATH.'/'.DEFAULT_OUTPUT_DIRECTORY;
$force  = $options['f'] ?? false;

try {
    $hotelManager = new HotelManager(strtolower($vendor), $output, $force);
    $hotelManager->execute();
} catch (\Exception $e) {
    die($e->getMessage());
}