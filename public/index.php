<?php
ini_set('display_errors', 1);
require_once __DIR__ . '/../vendor/autoload.php';

use Alex\App\System\Core\Application;


$app = new Application();

$app->run();
