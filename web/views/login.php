<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once "cabecalho.php" ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">

<?php require_once "menu.php" ?>
<?php require_once "apresentacao.php" ?>

<div id="login" class="container-fluid">

  <form class="form-inline text-center">
    <h3>Acesse com seu email pessoal ou com alguma das contas abaixo.</h3>
    <input type="email" class="form-control" size="70" placeholder="Email" required>
    <input type="password" class="form-control" size="15" placeholder="Senha" required>
    <button type="button" class="btn btn-danger">Entrar</button>
    <br /><br />
    <img src="./img/google.png" class="img-thumbnail" width="200" height="200" alt="Utilize sua conta do Google para acessar o meuporquinho.com"/>
    <img src="./img/facebook.png" class="img-thumbnail" width="200" height="200" alt="Utilize sua conta do Facebook para acessar o meuporquinho.com"/>
  </form>
</div>

<?php require_once "rodape.php" ?>

</body>
</html>
