<?php

class View
{
    function exibir($pagina = NULL){
      if(!isset($pagina)){
        //descobrir a pagina na URL
        //$rota = ltrim(parse_url(filter_input(INPUT_SERVER, 'REQUEST_URI'), PHP_URL_PATH), "/");
        $rota = parse_url("http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
        $destino = trim(str_replace("/","", $rota["path"]));
        //Caso nao tenha uma rota definida, redirecionar para a pagina de inicio
        $path = (!isset($destino) ? "./assets/$destino.php" : "./assets/default.php");
      } else {
        //apresentar a pagina solicitada
        $path = "./assets/$pagina.php";
      }
      //"" e a raiz do site
      //Verificar se a pagina solciitada esta dentro das opcoes validas
      $menu = array("", "default", "arquivo", "grafico", "regra", "login");
      if(in_array(isset($destino) ? $destino : $pagina, $menu) AND file_exists($path)){
        require_once $path;
      } else {
        http_response_code(404);
        exibir("erro");
      }
    }


    public function show($message) {
        return print_r($message);
    }
}
