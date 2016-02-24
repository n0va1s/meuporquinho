<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once "cabecalho.php" ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">

<?php require_once "menu.php" ?>
<?php require_once "login.php" ?>

<div id="arquivo" class="container-fluid bg-grey">
  <h2 class="text-center">Importar o arquivo (OFX)</h2>
  <div class="row">
    <div class="col-md-5">
      <p>Veja como baixar o arquivo da sua conta
      <a href="/">Link do video para baixar OFX</a>
    </div>
    <div class="col-md-7">
      <div class="row">
        <div class="col-md-8 form-group">
          <label for="arquivo">Arquivo (OFX):</label>
          <input type="text" class="form-control" id="arquivo" required>
          <a href="#" class="btn btn-default pull-right" role="button">
            <span class="glyphicon glyphicon-search"></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 form-group">
          <label for="optradio">Tipo: </label>
          <div class="radio">
          <label><input type="radio" name="optradio">Conta Corrente</label>
          <label><input type="radio" name="optradio">Cartão de Crédito</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 form-inline">
          <label for="mes">Competência: </label>
          <input type="text" class="form-control" size="5" placeholder="MM" id="mes">/
          <input type="text" class="form-control" size="5" placeholder="YYYY" id="ano">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 form-group">
          <br />
          <button class="btn btn-primary pull-right" type="submit">
            <span class="glyphicon glyphicon-search"> Carregar</span></button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once "rodape.php" ?>

</body>
</html>
