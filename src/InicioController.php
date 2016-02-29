<?php

require_once "View.php";

class InicioController
{

    private $view;

    public function __construct(){
      $this->view = new View();
    }

    public function executar(){
      $this->view->exibir();
    }

    public function __destruct(){
      $this->view = NULL;
    }
}
