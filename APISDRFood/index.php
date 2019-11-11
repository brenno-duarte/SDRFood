<?php

require_once 'Sources/Controller/GarcomController.php';
require_once 'Sources/Controller/ProdutoController.php';
require 'Config.php';
require 'dependences.php';

/**
 * 
 * GARÇOM
 * 
 */

$app->group("", function() use ($app) {
    $app->get('/garcom', GarcomController::class. ':listar');
    $app->get('/garcom/{id}', GarcomController::class. ':listarUnico');
    $app->post('/garcom', GarcomController::class. ':inserir');
    $app->put('/garcom/{id}', GarcomController::class. ':atualizar');
    $app->delete('/garcom/{id}', GarcomController::class. ':deletar');
});

/**
 * 
 * PRODUTOS
 * 
 */

$app->group('', function() use ($app){
    $app->get('/produto', ProdutoController::class. ':listar');
    $app->get('/produto/{id}', ProdutoController::class. ':listarUnico');
    $app->post('/produto', ProdutoController::class. ':inserir');
    $app->put('/produto/{id}', ProdutoController::class. ':atualizar');
    $app->delete('/produto/{id}', ProdutoController::class. ':deletar');
});

$app->run();
