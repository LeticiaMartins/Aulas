<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Password</title>
  </head>
  <body>

    <form class="" action="password.php" method="post">
      <input type="email" name="email" value="" placeholder="E-mail">
      <input type="password" name="senha" value="" placeholder="Senha">
      <input type="password_verify" name="senha" value="" placeholder="Confirmar senha">
      <button type="submit" name="button">Enviar</button>

    </form>
    <?php

    $senhaCorreta = $_POST['senha'];
    $senhaCriptografada = password_hash($senhaCorreta, PASSWORD_DEFAULT);


    if (isset($_POST['senha'])) {
      if (password_verify ($_POST['senha'],$senhaCriptografada)) {
        echo "$senhaCriptografada";
      }else{
        echo "senha incorreta";
      }
    }


     ?>
  </body>
</html>
