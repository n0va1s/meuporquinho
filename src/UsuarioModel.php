<?php

require 'UsuarioDAO.php';

class UsuarioModel {
    private $seqUsuario;
    private $nomUsuario;
    private $emlUsuario;
    private $tipOrigem;
    private $senUsuario;
    private $datInativo;

    function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
    }

    public function setSeqUsuario($seqUsuario) {
        $this->seqUsuario = $seqUsuario;
    }

    public function setNomUsuario($nomUsuario) {
        $this->nomUsuario = $nomUsuario;
    }

    public function setEmlUsuario($emlUsuario) {
        $this->emlUsuario = $emlUsuario;
    }

    public function setTipOrigem($tipOrigem) {
        $this->tipOrigem = $tipOrigem;
    }

    public function setSenUsuario($senUsuario) {
        $this->senUsuario = $senUsuario;
    }

    public function setDatInativo($datInativo) {
        $this->datInativo = $datInativo;
    }

    public function getSeqUsuario(){
        return $this->seqUsuario;
    }

    public function getNomUsuario(){
        return $this->nomUsuario;
    }

    public function getEmlUsuario(){
        return $this->emlUsuario;
    }

    public function getTipOrigem(){
        return $this->tipOrigem;
    }

    public function getSenUsuario(){
        return $this->senUsuario;
    }

    public function getDatInativo(){
        return $this->datInativo;
    }

    public function autenticar() {
        if($this->getEmlUsuario() == "GOO"){
          //chamar a autenticacao do Google
        } elseif ($this->getEmlUsuario() == "FAC") {
          //chamar a autenticacao do Facebook
        } else { //autenticacao na base local
          if(!empty($this->getEmlUsuario()) && !empty($this->getSenUsuario())){
             $this->usuarioDAO->logar();
             return true;
          } else {
            return false;
          }
        }
    }

    public function gravar() {
        if(!empty($this->getSeqUsuario())){
           $this->usuarioDAO->alterar($this);
        } else {
           $this->usuarioDAO->inserir($this);
        }
        return true;
    }

    public function listarUsuarios() {
        return $this->usuarioDAO->listar();
    }

    public function listarUsuariosAtivos() {
        return $this->usuarioDAO->listarAtivos();
    }

    public function desativarUsuario($seqUsuario) {
        return $this->usuarioDAO->desativar($seqUsuario);
    }

    function __destruct() {
        $this->usuarioDAO = NULL;
    }
}
