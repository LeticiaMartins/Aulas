<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Criptografia de senha</h1>
    <?php
    $senha = "sextou";
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
    //echo PASSWORD_DEFAULT;
    echo "Senha: $senha <br>";
    echo "Senha criptografada: ". $senhaCriptografada;


     ?>
  </body>
</html>
