<?php

require 'CategoriaDAO.php';

class CategoriaModel {
    private $seqCategoria;
    private $nomCategoria;
    private $txtCategoria;
    private $indCategoria;
    private $tipGrupo;
    private $datInativo;

    function __construct() {
        $this->CategoriaDAO = new CategoriaDAO();
    }

    public function setSeqCategoria($seqCategoria) {
        $this->seqCategoria = $sseqCategoria;
    }

    public function setNomCategoria($nomCategoria) {
        $this->nomCategoria = $nomCategoria;
    }

    public function setTxtCategoria($txtCategoria) {
        $this->txtCategoria = $txtCategoria;
    }

    public function setIndCategoria($indCategoria) {
        $this->indCategoria = $indCategoria;
    }

    public function setTipGrupo($tipGrupo) {
        $this->tipGrupo = $tipGrupo;
    }

    public function setDatInativo($datInativo) {
         $this->datInativo = $datInativo;
    }

    public function getSeqCategoria(){
        return $this->seqCategoria;
    }

    public function getNomCategoria(){
        return $this->nomCategoria;
    }

    public function getTxtCategoria(){
        return $this->txtCategoria;
    }

    public function getIndCategoria(){
        return $this->indCategoria;
    }

    public function getTipGrupo(){
        return $this->tipGrupo;
    }

    public function getDatInativo(){
        return $this->datInativo;
    }

    public function gravar() {
        if(!empty($this->getSeqCategoria())){
           $this->CategoriaDAO->alterar($this);
        } else {
           $this->CategoriaDAO->inserir($this);
        }
        return true;
    }

    public function listarCategorias() {
        return $this->categoriaDAO->listar();
    }

    public function listarCategoriasAtivas() {
        return $this->categoriaDAO->listarAtivas();
    }

    public function desativarCategoria($seqCategoria) {
        return $this->categoriaDAO->desativar($seqCategoria);
    }

    function __destruct() {
        $this->categoriaDAO = NULL;
    }
}
