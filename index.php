<?php
ini_set('display_errors', 0);
require __DIR__ . '/vendor/autoload.php';

define('APPPATH', 'src/');

$application = new App\Core\Application();
$application->run();