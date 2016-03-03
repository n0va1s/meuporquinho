<?php

require_once "LancamentoDAO.php";
require_once "Ofx.php";

class LancamentoModel {

  private $seqUsuario;
  private $datLancamento;
  private $diaLancamento;
  private $mesLancamento;
  private $anoLancamento;
  private $valLancamento;
  private $numLancamento;
  private $txtLancamento;
  private $txtOrigem;
  private $seqCategoria;

  private $dao;
  private $ofx;

  function __construct() {
    $this->dao = new LancamentoDAO();
  }

  public function setSeqUsuario($seqUsuario){
    $this->seqUsuario = $seqUsuario;
  }

  public function setDatlancamento($datLancamento){
     $this->datLancamento = $datLancamento;
  }

  public function setDiaLancamento($diaLancamento){
    $this->diaLancamento = $diaLancamento;
  }

  public function setMesLancamento($mesLancamento){
    $this->mesLancamento = $mesLancamento;
  }

  public function setAnoLancamento($anoLancamento){
    $this->anoLancamento = $anoLancamento;
  }

  public function setValLancamento($valLancamento){
    $this->valLancamento = $valLancamento;
  }

  public function setNumLancamento($numLancamento){
    $this->numLancamento = $numLancamento;
  }

  public function setTxtLancamento($txtLancamento){
    $this->txtLancamento = $txtLancamento;
  }

  public function setTxtOrigem($txtOrigem){
    $this->txtOrigem = $txtOrigem;
  }

  public function setSeqCategoria($seqCategoria){
    $this->seqCategoria = $seqCategoria;
  }

  public function getSeqUsuario(){
    return $this->seqUsuario;
  }

  public function getDatlancamento(){
    return $this->datLancamento;
  }

  public function getDiaLancamento(){
    return $this->diaLancamento;
  }

  public function getMesLancamento(){
    return $this->mesLancamento;
  }

  public function getAnoLancamento(){
    return $this->anoLancamento;
  }

  public function getValLancamento(){
    return $this->valLancamento;
  }

  public function getNumLancamento(){
    return $this->numLancamento;
  }

  public function getTxtLancamento(){
    return $this->txtLancamento;
  }

  public function getTxtOrigem(){
    return $this->txtOrigem;
  }

  public function getSeqCategoria(){
    return $this->seqCategoria;
  }

  public function validar($arquivo) {

    if(pathinfo(basename($arquivo["name"]),PATHINFO_EXTENSION) <> "ofx"){
      echo "Não gosto desse tipo de arquivo[ ".pathinfo(basename($arquivo["name"]),PATHINFO_EXTENSION)." ]. Baixe o arquivo do seu banco no formato OFX. Oink... <br>";
      return false;
    }

    if(empty($arquivo["tmp_name"])){
      echo "O arquivo não foi carregado para o servidor.Tente novamente. Oink... <br>";
      return false;
    }
  /*
    if(file_exists($arquivo["tmp_name"])) {
      echo "Você já carregou esse arquivo antes. Oink... <br>";
      return false;
    }
  */
    if($arquivo["size"] = 0){
      echo "O arquivo está vazio. Carregue outro arquivo. Oink... <br>";
      return false;
    }
  }

  public function importar($arquivo) {

    $caminho = "../arquivos/";
    $pasta = dir($caminho);

  //$file = $path.basename($arquivo["name"]);
  //$info = pathinfo($file,PATHINFO_EXTENSION);

    if (move_uploaded_file($arquivo["tmp_name"], $caminho.basename($arquivo["name"]))) {
        echo "Oink! O arquivo [".basename( $arquivo["name"])."] foi carregado para o site! <br>";
    } else {
        echo "Poxa, não carreguei o arquivo. Tente novamente... oink.. <br>";
    }

    $this->ofx = new Ofx($caminho.basename($arquivo["name"]));

    $bank = $this->ofx->getBank();
    if(isset($bank)){
      $origin = "CONTA-".$bank->BANKID."-".$bank->BRANCHID."-".$bank->ACCTID;
    }

    $card = $this->ofx->getCard();
    if (isset($card)){
      $origin = "CARTAO-".$card->CCACCTFROM->ACCTID;
    }

    foreach ($this->ofx->getTransactions() as $transaction){

      $this->setSeqUsuario(1);//JP
      $this->setDatLancamento(date("Y-m-d", strtotime(substr($transaction->DTPOSTED, 0, 8))));
      $this->setDiaLancamento(date("d", strtotime(substr($transaction->DTPOSTED, 0, 8))));
      $this->setMesLancamento(date("m", strtotime(substr($transaction->DTPOSTED, 0, 8))));
      $this->setAnoLancamento(date("YYYY", strtotime(substr($transaction->DTPOSTED, 0, 8))));
      $this->setValLancamento($transaction->TRNAMT);
      $this->setNumLancamento($transaction->CHECKNUM);
      $this->setTxtLancamento($transaction->MEMO);
      $this->setTxtOrigem($origin);
      $this->dao->inserir($this);
    }
    echo "Arquivo importado. Oink! <br>";
  }
}
