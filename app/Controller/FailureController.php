<?php
namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class FailureController {
    public function list(Request $request, Response $response, $args) {
        // Lógica do controlador aqui
        // Exemplo: Renderizar um template e retornar uma resposta HTTP
        $response->getBody()->write(json_encode(['olá' => 'mundo']));

        return $response;
    }
}