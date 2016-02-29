<?php

require_once 'RegraView.php';
require_once 'RegraModel.php';

class RegraController
{

    private $view;
    private $model;

    public function __construct(){
      $this->view = new RegraView();
      $this->model = new RegraModel();
    }

    public function executar(){
      //Exibir a pagina
      $this->view->exibir($pagina);

      $acao = isset($_POST["acao"]) ? $_POST["acao"] : "");
      $this->model->setSeqRegra = isset($_POST["seqRegra"]) ? $_POST["seqRegra"] : "");
      $this->model->setTipRegra = isset($_POST["tipRegra"]) ? $_POST["tipRegra"] : "");
      $this->model->setSeqCategoria = isset($_POST["seqCategoria"]) ? $_POST["seqCategoria"] : "");

      if ($acao == "Editar")
        $this->model->gravar($this->model);
      elseif ($acao == "Excluir") {
        $this->model->excluir($this->model);
      }
    }

    public function __destruct(){
      $this->view = NULL;
      $this->model = NULL;
    }
}
