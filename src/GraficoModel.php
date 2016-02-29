<?php

require 'CategoriaDAO.php';
require 'LancamentoDAO.php';

class GraficoModel {

    private $categoriaDAO;
    private $lancamentoDAO;

    function __construct() {
        $this->categoriaDAO = new CategoriaDAO();
        $this->lancamentoDAO = new LancamentoDAO();
    }

    public function listarReceitaDespesa($seqUsuario, $ano, $mes) {

    }

    public function listarTop5Categoria($seqUsuario, $ano, $mes) {

    }

    public function listarTop5Grupo($seqUsuario, $ano, $mes) {

    }

    public function listarEvolucaoCategoria($seqUsuario, $ano, $mes) {

    }

    function __destruct() {
        $this->categoriaDAO = NULL;
        $this->lancamentoDAO = NULL;
    }
}
