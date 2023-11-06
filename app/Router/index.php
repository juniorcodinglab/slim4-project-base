<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/ping', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/failure', [\App\Controller\FailureController::class, 'list']);
$app->get('/failure/detail/{id}', 'App\Controller\FailureController:detail');
$app->get('/failure/add', 'App\Controller\FailureController:create');