<?php

require 'LancamentoDAO.php';

class LancamentoModel {
    private $seqUsuario;
    private $datLancamento;
    private $diaLancamento;
    private $mesLancamento;
    private $anoLancamento;
    private $valLancamento;
    private $numLancamento;
    private $txtLancamento;
    private $seqCategoria;

    function __construct() {
        $this->lancamentoDAO = new LancamentoDAO();
    }

    public function setSeqUsuario($seqUsuario) {
        $this->seqUsuario = $seqUsuario;
    }

    public function setDatLancamento($datLancamento) {
        $this->datLancamento = $datLancamento;
    }

    public function setDiaLancamento($diaLancamento) {
        $this->diaLancamento = $diaLancamento;
    }

    public function setMesLancamento($mesLancamento) {
        $this->mesLancamento = $mesLancamento;
    }

    public function setAnoLancamento($anoLancamento) {
        $this->anoLancamento = $anoLancamento;
    }

    public function setValLancamento($valLancamento) {
        $this->valLancamento = $valLancamento;
    }

    public function setNumLancamento($numLancamento) {
        $this->numLancamento = $numLancamento;
    }

    public function setTxtLancamento($txtLancamento) {
        $this->txtLancamento = $txtLancamento;
    }

    public function setSeqCategoria($seqCategoria) {
        $this->seqCategoria = $seqCategoria;
    }

    public function getSeqUsuario() {
        return $this->seqUsuario;
    }

    public function getDatLancamento() {
        return $this->datLancamento;
    }

    public function getDiaLancamento() {
        return $this->diaLancamento;
    }

    public function getMesLancamento() {
        return $this->mesLancamento;
    }

    public function getAnoLancamento() {
        return $this->anoLancamento;
    }

    public function getValLancamento() {
        return $this->valLancamento;
    }

    public function getNumLancamento() {
        return $this->numLancamento;
    }

    public function getTxtLancamento() {
        return $this->txtLancamento;
    }

    public function getSeqCategoria() {
        return $this->seqCategoria;
    }

    public function gravar() {
        if(!empty($this->getSeqLancamento())){
           $this->lancamentoDAO->alterar($this);
        } else {
           $this->lancamentoDAO->inserir($this);
        }
        return true;
    }

    public function listarLancamentos() {
        return $this->lancamentoDAO->listar();
    }

    function __destruct() {
        $this->lancamentoDAO = NULL;
    }
}
