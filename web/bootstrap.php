<?php
$app = new Silex\Application();
// Liga e desliga o debug gravado em arquivo
$app['debug'] = true;

// Timezone
date_default_timezone_set('America/Sao_Paulo');

// monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));
$app['monolog']->addDebug('monolog configurado');

// TWIG
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));
$app['monolog']->addDebug('TWIG configurado');

// Form
//$app->register(new Silex\Provider\ValidatorServiceProvider());
$app->register(new Silex\Provider\LocaleServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'locale_fallbacks' => array('pt-br'),
));
$app['monolog']->addDebug('Form configurado');

// Session
$app->register(new Silex\Provider\SessionServiceProvider());
$app['monolog']->addDebug('Session configurada');

// Doctrine DBAL (database)
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'    => 'pdo_mysql',
        'host'      => '127.0.0.1',
        'dbname'    => 'trwip',
        'user'      => 'root',
        'password'  => 'root',
        'charset'   => 'utf8mb4',
    ),
 ));
$app['monolog']->addDebug('Conexao configurada');

//Fim da configuracao
$app['monolog']->addDebug('Terminou a configuracao');

return $app;
