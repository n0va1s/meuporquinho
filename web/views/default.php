<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once "cabecalho.php" ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">

<?php require_once "menu.php" ?>
<?php require_once "apresentacao.php" ?>

<div id="execucao" class="container-fluid">
  <div class="col-md-12 form-group">
    <input type="text" id="valor">
    <button class="btn btn-primary pull-right" type="submit">
      <span class="glyphicon glyphicon-plus">Lançamento Manual</span>
    </button>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>Categoria</th>
        <th>Janeiro</th>
        <th>Fevereiro</th>
        <th>Março</th>
        <th>Abril</th>
        <th>Maio</th>
        <th>Junho</th>
        <th>Julho</th>
        <th>Agosto</th>
        <th>Setembro</th>
        <th>Outubro</th>
        <th>Novembro</th>
        <th>Dezembro</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Alimentação</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
      </tr>
      <tr>
        <td>Combustível</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
      </tr>
      <tr>
        <td>Telefone celular</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
        <td>R$ 0,00</td>
      </tr>
    </tbody>
  </table>
</div>

<?php require_once "rodape.php" ?>

</body>
</html>
