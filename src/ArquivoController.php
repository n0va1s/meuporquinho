<?php

require_once 'View.php';
require_once 'ArquivoModel.php';

class ArquivoController
{

    private $view;
    private $model;

    public function __construct(){
      $this->view = new View();
      $this->model = new ArquivoModel();
      $this->executar();
    }

    public function executar(){
      $arquivo = $_FILES["arquivo"];
      if(isset($arquivo)){
        $this->model->validar($arquivo);
        //Carregar o arquivo com os lancamentos de receita e despesa
        $this->model->importar($arquivo);
        //Mensagem de sucesso
        echo "Oink! Arquivo carregado! Verifique na página inicial os novos valores.";
      } else {
        echo "Não recebi nenhum arquivo pra mastigar... oink...";
      }
    }

    public function __destruct(){
      $this->view = NULL;
      $this->model = NULL;
    }
}

$obj = new ArquivoController();
