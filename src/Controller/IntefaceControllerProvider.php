<?php
namespace varinha\Controller;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class InferfaceControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        // creates a new controller based on the default route
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function (Application $app) {
            return $app->redirect('/');
        });

        $controllers->get('/analitico', function (Application $app) {
            $sql = $app['db']->createQueryBuilder();
            $sql->select('*')->from('perfil');
            $perfis = $app['db']->fetchAll($sql);
            
            return $app['twig']->render('cadastrar-perfil.twig', array('perfis' => $perfis));
        })->bind('analitico');
        
        $controllers->get('/graficos', function (Application $app) {
            return $app['twig']->render('grafico.twig');
        })->bind('grafico');

        return $controllers;
    }
}
