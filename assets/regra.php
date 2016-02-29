<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once "cabecalho.php" ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">

<?php require_once "menu.php" ?>
<?php require_once "apresentacao.php" ?>

  <div id="regra" class="container-fluid">
<!--
  <div class="col-md-12 form-group">
    <button class="btn btn-primary pull-right" type="submit">
      <span class="glyphicon glyphicon-plus"> Nova Regra</span>
    </button>
  </div>
-->
  <table class="table">
    <thead>
      <tr>
        <th>Regra</th>
        <th>Pesquisa</th>
        <th>Categoria</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>ANA ARAUJO</td>
        <td>Parcial</td>
        <td>Alimentação</td>
        <td><span class="glyphicon glyphicon-pencil"></span></td>
        <td><span class="glyphicon glyphicon-trash"></span></td>
      </tr>
      <tr>
        <td>Escritório de Advocacia José Antunes</td>
        <td>Exata</td>
        <td>Gastos Pessoais</td>
        <td><span class="glyphicon glyphicon-pencil"></span></td>
        <td><span class="glyphicon glyphicon-trash"></span></td>
      </tr>
      <tr>
        <td>Combustível</td>
        <td>Parcial</td>
        <td>Carro</td>
        <td><span class="glyphicon glyphicon-pencil"></span></td>
        <td><span class="glyphicon glyphicon-trash"></span></td>
      </tr>
    </tbody>
  </table>
</div>

<?php require_once "rodape.php" ?>

</body>
</html>
