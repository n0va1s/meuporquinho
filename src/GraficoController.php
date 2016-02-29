<?php

require_once 'GraficoView.php';
require_once 'GraficoModel.php';

class GraficoController
{

    private $view;
    private $model;

    public function __construct(){
      $this->view = new GraficoView();
      $this->model = new GraficoModel();
    }

    public function executar(){
      //Exibir a pagina
      $this->view->exibir($pagina);
      //Recuperar o ano e mes para apresentacao dos graficos
      $this->model->setAno(isset($_POST["ano"]) ? $_POST["ano"] : "");
      $this->model->setMes(isset($_POST["mes"]) ? $_POST["mes"] : "");
      //Receita e despesa
      $registros = $this->model->listarReceitaDespesa($seqUsuario, $ano, $mes);
      $this->view->atualizarGraficoReceitaDespesa($registros)
      //Top 5 categoria
      $registros = $this->model->listarTop5Categoria($seqUsuario, $ano, $mes);
      $this->view->atualizarGraficoTop5Categoria($registros);
      //Top 5 grupo
      $registros = $this->model->listarTop5Grupo($seqUsuario, $ano, $mes);
      $this->view->atualizarGraficoTop5Grupo($registros);
      //Evolucao das categorias
      $registros = $this->model->listarEvolucaoCategoria($seqUsuario, $ano, $mes);
      $this->view->atualizarEvolucaoCategoria($registros);
    }

    public function __destruct(){
      $this->view = NULL;
      $this->model = NULL;
    }
}
