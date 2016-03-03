<?php

require_once 'View.php';
require_once 'LancamentoModel.php';

class LancamentoController
{

    private $view;
    private $model;

    public function __construct(){
      $this->view = new View();
      $this->model = new LancamentoModel();
      $this->executar();
    }

    public function executar(){
      $arquivo = $_FILES["arquivo"];
      if(isset($arquivo)){
        $this->model->validar($arquivo);
        //Carregar o arquivo local para o site
        $this->model->importar($arquivo);

        //Mensagem de sucesso
        echo "Oink! Receitas e despesas carregadas!";
        $this->view->encaminhar("default");
      } else {
        echo "Não recebi nenhum arquivo pra mastigar... oink...";
      }
    }

    public function __destruct(){
      $this->view = NULL;
      $this->model = NULL;
    }
}

$obj = new LancamentoController();
