<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form class="" action="Login.php" method="post">
      <input type="email" name="email" value="" placeholder="E-mail">
      <input type="password" name="senha" value="" placeholder="Senha">
      <button type="submit" name="button">Entrar</button>

    </form>
    <?php
    $emailCorreto = "hendy@mail.com";
    $senhaCorreta = '$2y$10$yDwSKVdWiSkn/18MY/7kA.IeK8PeVI/jjDma0fP/CFzQMk8tDXCRu';//password_hash("sextou", PASSWORD_DEFAULT);//minha senha criptografada

    //verificar com dados do login
    if(isset($_POST['email']) && isset($_POST['senha'])){
    //verificar email e senha
      if($_POST['email'] === $emailCorreto && password_verify($_POST['senha'], $senhaCorreta)){
        echo "<h2>Bem Vindo, $emailCorreto!</h2";
      }else{
        echo "<h2>Cai fora! Login ou senha invalida.</h2>";
    }
  }
     ?>
  </body>
</html>
