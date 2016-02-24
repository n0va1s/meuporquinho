<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once "cabecalho.php" ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">

<?php require_once "menu.php" ?>
<?php require_once "login.php" ?>

<div id="grafico" class="container-fluid text-center">
  <div class="col-sm-4 panel panel-default">
    <div class="panel-heading">Receita e despesa</div>
    <div class="panel-body">Gráfico</div>
  </div>
  <div class="col-sm-4 panel panel-default">
    <div class="panel-heading">Top 5 categorias</div>
    <div class="panel-body">Gráfico</div>
  </div>
  <div class="col-sm-4 panel panel-default">
    <div class="panel-heading">Top 5 grupos</div>
    <div class="panel-body">Gráfico</div>
  </div>
  <div class="col-sm-12 panel panel-default">
    <div class="panel-heading">Evolução por categoria</div>
    <div class="panel-body">Gráfico</div>
  </div>
</div>

<?php require_once "rodape.php" ?>

</body>
</html>
