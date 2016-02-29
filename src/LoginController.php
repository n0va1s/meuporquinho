<?php

require_once 'LoginView.php';
require_once 'LoginModel.php';

class LoginController
{

    private $view;
    private $model;

    public function __construct(){
      $this->view = new LoginView();
      $this->model = new LoginModel();
    }

    public function executar(){
      //Exibir a pagina
      $this->view->exibir($pagina);
      //Autenticacao na base local
      //TODO:colocar a integracao com os servicos de autenticacao do Google e do Facebook
      $this->model->setEmail = isset($_POST["email"]) ? $_POST["email"] : "");
      $this->model->setSenha = isset($_POST["senha"]) ? $_POST["senha"] : "");
      $this->model->autenticar();


      if($this->model->autenticar()){
        //Mensagem de sucesso
        $this->view->setMensagem("Oink! Bemvindo");
      } else {
        //Apesenta o erro vindo da autenticacao
        $this->view->setMensagem($this->model->autenticar());
      }
    }

    public function __destruct(){
      $this->view = NULL;
      $this->model = NULL;
    }
}
