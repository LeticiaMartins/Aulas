<?php

  if(isset($_POST['cor'])){
    $bg = $_POST['cor'];

  }


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercicio 2</title>
  </head>
  <body style="background-color: <?php echo $bg; ?>">

    <form action="cor.php" method="post">
      <select name="cor">
        <option disabled selected>Escolha uma cor</option>
        <option value="yellow">Amarelo</option>
        <option value="red">Vermelho</option>
        <option value="purple">Roxo</option>
        <option value="lightblue">Azul Claro</option>
        <option value="gray">Cinza</option>

      </select>
      <button type="submit">Aplicar</button>
    </form>


  </body>
</html>
