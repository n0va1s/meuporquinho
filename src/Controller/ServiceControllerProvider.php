<?php
namespace varinha\Controller;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ServiceControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        // creates a new controller based on the default route
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function (Application $app) {
            return $app->redirect('/');
        });

        $controllers->post('/salvar-destino', function (Request $req, Application $app) {
            $data = $req->request->all();
            
            $app['db']->beginTransaction();
            try {
                //Viagem
                $sql = $app['db']->createQueryBuilder();
                $sql->insert('viagem')
                    ->values(array('seq_organizador' => '?'))
                    ->setParameter(0, '1')
                    ->execute();

                $app['seq_viagem'] = $app['db']->lastInsertId();

                //Viagem_Itinerario
                $sql = $app['db']->createQueryBuilder();
                $sql->insert('viagem_itinerario')
                    ->values(array('seq_viagem' => '?',
                                   'tip_continente' => '?',
                                   'nom_pais' => '?',
                                   'nom_estado' => '?',
                                   'nom_cidade' => '?',
                                   'url_hotel' => '?',
                                   'txt_itinerario' => '?'))
                    ->setParameter(0, $app['seq_viagem'])
                    ->setParameter(1, $data['tipContinente'])
                    ->setParameter(2, $data['nomPais'])
                    ->setParameter(3, $data['nomEstado'])
                    ->setParameter(4, $data['nomCidade'])
                    ->setParameter(5, $data['urlHotel'])
                    ->setParameter(6, $data['txtItinerario'])
                    ->execute();
                $app['db']->commit();
            } catch (Exception $e) {
                $app['db']->rollBack();
                throw $e;
            }

            if ($app['seq_viagem']) {
                return $app->redirect('./salvar-perfil');
                
            } else {
                return $app->abort(500, 'Erro no cadastro');
            }
        })->bind('salvar-destino');

        $controllers->post('/salvar-perfil', function (Request $req, Application $app) {
            $data = $req->request->all();

            $app['db']->beginTransaction();
            try {
                //Viagem
                $sql = $app['db']->createQueryBuilder();
                $sql->update('viagem')
                    ->set('txt_parceiro', '?')
                    ->where($sql->expr()->eq('seq_viagem', '?'))
                    ->setParameter(0, $data['txtParceiro'])
                    ->setParameter(1, $app['seq_viagem'])
                    ->execute();

                //Viagem_Perfil
                foreach ($data['optPerfil'] as $selecionado) {
                    $sql = $app['db']->createQueryBuilder();
                    $sql->insert('viagem_perfil')
                        ->values(array('seq_viagem' => '?',
                                   'seq_perfl' => '?'))
                    ->setParameter(0, $seq_viagem)
                    ->setParameter(1, $selecionado)
                    ->execute();
                }

                $app['db']->commit();
                return $app->redirect('./salvar-transporte');
            } catch (Exception $e) {
                $app['db']->rollBack();
                return $app->abort(500, 'Erro no cadastro');
                throw $e;
            }
     
        })->bind('save-profile');

        return $controllers;
    }
}
