

<?php
  if ($_POST) {
    setcookie('nome', $_POST['nome']);
    setcookie('idade', $_POST['idade']);
  }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="idade.php" method="post">
      Nome:
      <input type="text" name="nome" value=""><br>
      Idade:
      <input type="text" name="idade" value=""><br>
      <button type="submit">Enviar</button>
</form>
  <hr>

  <?php echo "Nome: ".(isset($_COOKIE['nome'])?$_COOKIE['nome']: '')."<br>";?>
  <?php echo "Idade: ".(isset($_COOKIE['idade'])?$_COOKIE['idade']: '')."<br>";?>

  </body>
</html>
