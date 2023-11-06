<?php

date_default_timezone_set('America/Sao_Paulo');
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors', 1);

use Selective\BasePath\BasePathMiddleware;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

// Add Slim routing middleware
$app->addRoutingMiddleware();

// Set the base path to run the app in a subdirectory.
// This path is used in urlFor().
$app->add(new BasePathMiddleware($app));

$app->addErrorMiddleware(true, true, true);

$app->addErrorMiddleware(true, true, true);

require __DIR__ . '/../app/Router/index.php';

$app->run();