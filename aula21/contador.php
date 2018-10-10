<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contador</title>
  </head>
  <body>
    <?php

    session_start();

    $_SESSION['contador'] = $_SESSION['contador'] ? :0;

    if ($_POST['mudarContador'] === "Aumentar") {
      $_SESSION['contador']+=1;
    }

    if ($_POST['mudarContador'] === "Reiniciar") {
      $_SESSION['contador']= 0;
    }

    echo $_SESSION['contador'];


     ?>
     <br>
     <a href="cor.php">Exercicio 2</a>


     <form action="contador.php" method="post">
       <input type="submit" name="mudarContador" value="Aumentar">
       <input type="submit" name="mudarContador" value="Reiniciar">

     </form>
  </body>
</html>
