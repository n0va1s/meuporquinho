<?php

require 'UsuarioDAO.php';

class CategoriaModel {
    private $seqUsuario;
    private $nomUsuario;
    private $emlUsuario;
    private $tipOrigem;
    private $datInativo;

    function __construct() {
        $this->UsuarioDAO = new UsuarioDAO();
    }

    public function setSequsuario($seqUsuario) {
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

    public function setDatInativo($datInativo) {
        $this->datInativo = $datInativo;
    }

    public function getSeqUsuario(){
        return $this->seqUsuario;
    }

    public function getEmlUsuario(){
        return $this->emlUsuario;
    }

    public function getTipOrigem(){
        return $this->tipOrigem;
    }

    public function getDatInativo(){
        return $this->datInativo;
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
