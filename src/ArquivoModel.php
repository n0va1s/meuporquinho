  <?php

require_once "LancamentoDAO.php";

class ArquivoModel {

  private $seqUsuario;
  private $datLancamento;
  private $diaLancamento;
  private $mesLancamento;
  private $anoLancamento;
  private $valLancamento;
  private $numLancamento;
  private $txtLancamento;
  private $seqCategoria;

  private $dao;


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

    while($arquivo = $pasta->read()){

      if(($arquivo <> "undefined") && ($arquivo <> "..") && ($arquivo <> ".")){

        $dados = file_get_contents($caminho.$arquivo);

        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->recover=true;
        $dom->loadXML($dados);

        //$dom->loadHTML($dados);
        //$dom->saveHTML();

        //foreach ($this->getValores($dados) as $linha) {
          foreach ($dom->saveXML() as $key => $value) {
var_dump($key);
var_dump($value);
return false;
/*
          try {
            $this->setSeqUsuario();
            $this->setDatLancamento($this->getData($linha));
            $this->setDiaLancamento();
            $this->setMesLancamento($this->getMes($linha));
            $this->setAnoLancamento($this->getAno($linha));
            $this->setValLancamento($this->getValor($linha));
            $this->setNumLancamento(md5($this->getValor($linha).$this->getData($linha).$this->getDescricao($linha)));
            $this->setTxtLancamento($this->getDescricao($linha));
            $this->setSeqCategoria("28");

            $this->dao->inserir();

     	    } catch (Exception $e) {
              echo "Erro ao recuperar os valores do arquivo ". $e->getMessage()." <br>";
          }
*/
        }
        echo "Arquivo importado. Oink! <br>";
      }
    }
  }

  function getMes($linha){
  	$a = split('<TRNTYPE>',$linha);
  	$a=$a[1];
  	$a=split('<DTPOSTED>',$a);
  	$a=$a[1];
  	$a=split('<TRNAMT>',$a);
  	$a=$a[0];
  	$data = trim($a);
  	$mes = substr($data, 4, 2);
  	switch ($mes){
  		case '01': $mes = 'Janeiro'; break;
  		case '02': $mes ='Fevereiro'; break;
  		case '03': $mes ='Marco'; break;
  		case '04': $mes ='Abril'; break;
  		case '05': $mes ='Maio'; break;
  		case '06': $mes ='Junho'; break;
  		case '07': $mes ='Julho'; break;
  		case '08': $mes ='Agosto'; break;
  		case '09': $mes ='Setembro'; break;
  		case '10': $mes ='Outubro'; break;
  		case '11': $mes ='Novembro'; break;
  		case '12': $mes ='Dezembro'; break;
  	}
  	return $mes;
  }

  function getAno($linha){
  	$a = split('<TRNTYPE>',$linha);
  	$a=$a[1];
  	$a=split('<DTPOSTED>',$a);
  	$a=$a[1];
  	$a=split('<TRNAMT>',$a);
  	$a=$a[0];
  	$data = trim($a);
  	return substr($data,0,4);
  }

  function remover($variavel){
    $variavel = str_replace("\r", "", $variavel);
  	$variavel = str_replace("\r <br>", "", $variavel);
    $variavel = str_replace(" <br>", "", $variavel);
  	$variavel = str_replace("\t", "", $variavel);
  	$variavel = str_replace(",", ".", $variavel);
  	return $variavel;
  }

  function getValores($data){
  	$a = split('<OFX>',$data);
  	$a =$a[1];
  	return str_replace('</STMTTRN>','',split('<STMTTRN>',$this->remover(str_replace('</OFX>','',$a))));
  }

  function getData($linha){
  		$a = split('<TRNTYPE>',$linha);
  		$a=$a[1];
  		$a=split('<DTPOSTED>',$a);
  		$a=$a[1];
  		$a=split('<TRNAMT>',$a);
  		$a=$a[0];
  		$data = trim($a);
  	 return substr($data,6,2)."/".substr($data,4,2)."/".substr($data,0,4);
  }

  function getId($linha){
  		$a = split('<TRNTYPE>',$linha);
  		$a=$a[1];
  		$a = split('<DTPOSTED>',$a);
  		$a=$a[1];
  		$a = split('<TRNAMT>',$a);
  		$a=$a[1];
  		$a = split('<FITID>',$a);
  		$a=$a[1];
  		$a = split('<PAYEEID>',$a);
  		$a=$a[1];
  		return trim($a);
  }

  function getDescricao($linha){
  		$a = str_replace('</MEMO>','',split('<MEMO>',$linha));
  		$a=$a[1];
  		$a = split('</BANKTRANLIST>',$a);
  		$a=$a[0];
  		return trim($a);
  }

  function getValor($linha){
      $a = split('<FITID>',$linha);
  		$a=$a[0];
  		$a = $a = str_replace('</TRNAMT>','',split('<TRNAMT>',$a));
  		$a=$a[1];

  		return trim(str_replace(',','.',$a));

  }
}
