<?php
require('../vendor/autoload.php');
require('bootstrap.php');

//Rotas do site
$app->get('/', function () use ($app) {
    $app['monolog']->addDebug('Chamou a rota /');
    return $app['twig']->render('index.twig');
})->bind('index');

$app->get('/contato', function () use ($app) {
    $app['monolog']->addDebug('Chamou a rota /contato');
    return $app['twig']->render('contact.twig');
})->bind('contact');

//Rotas da viagem
$app['monolog']->addDebug('Montou a rota de viagem');
$app->mount('/viagem', new Trwip\Controller\ViagemControllerProvider());

$app['monolog']->addDebug('Executou a aplicacao');
$app->run();
