<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once "cabecalho.php" ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">

<?php require_once "menu.php" ?>
<?php require_once "apresentacao.php" ?>

<div id="arquivo" class="container-fluid bg-grey">
  <h2 class="text-center">Importar o arquivo (OFX)</h2>
    <div class="row">
      <form id="frmArquivo" action="../src/LancamentoController.php" method="post" enctype="multipart/form-data">
        <label for="arquivo">Arquivo (OFX):</label>
        <input type="file" class="form-control" id="arquivo" name="arquivo" required>
        <br />
        <button class="btn btn-primary pull-right" type="submit">
          <span class="glyphicon glyphicon-send"> Carregar</span>
        </button>
      </form>
    </div>
  </div>
</div>

<?php require_once "rodape.php" ?>

</body>
</html>
