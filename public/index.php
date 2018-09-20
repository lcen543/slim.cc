<?php
use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
$app = new \Slim\App();


$app->get('/hello', function (Request $req,  Response $response, $args = []) {
    $response->getBody()->write("<h1>Hello, slim</h1>");
    return $response;
});
$app->run();