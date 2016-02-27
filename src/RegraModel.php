<?php

require 'RegraDAO.php';

class RegraModel {
    private $seqRegra;
    private $seqUsuario;
    private $desRegra;
    private $tipRegra;
    private $datInativo;
    private $seqCategoria;

    function __construct() {
        $this->regraDAO = new RegraDAO();
    }

    public function setSeqRegra($seqRegra) {
        $this->seqRegra = $seqRegra;
    }

    public function setSeqUsuario($seqUsuario) {
        $this->seqUsuario = $seqUsuario;
    }

    public function setDesRegra($desRegra) {
        $this->desRegra = $desRegra;
    }

    public function setTipRegra($tipRegra) {
        $this->tipRegra = $tipRegra;
    }

    public function setDatInativo($datInativo) {
        $this->datInativo = $datInativo;
    }

    public function setSeqCategoria($seqCategoria) {
       $this->seqCategoria = $seqCategoria;
    }

    public function getSeqRegra(){
        return $this->seqRegra;
    }

    public function getSeqUsuario(){
        return $this->seqUsuario;
    }

    public function getDesRegra(){
        return $this->desRegra;
    }

    public function getTipRegra(){
        return $this->tipRegra;
    }

    public function getDatInativo(){
        return $this->datInativo;
    }

    public function getSeqCategoria(){
        return $this->seqCategoria;
    }

    public function gravar() {
        if(!empty($this->getSeqRegra())){
           $this->regraDAO->alterar($this);
        } else {
           $this->regraDAO->inserir($this);
        }
        return true;
    }

    public function listar() {
        return $this->regraDAO->listar();
    }

    public function listarRegrasAtivas() {
        return $this->regraDAO->listarAtivas();
    }

    public function desativarRegra($seqRegra) {
        return $this->regraDAO->desativar($seqRegra);
    }

    function __destruct() {
        $this->regraDAO = NULL;
    }
}
