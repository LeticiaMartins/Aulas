<!DOCTYPE HTML>
<html>
<body>
  <?php
  var_dump($_POST); //1
  echo"<br>";
  echo $_POST['nome']; //2.b
  echo "<br>";
  foreach ($_POST as $key => $value) { //2.c
    echo "$key = $value <br>";
  }
  ?>
  <?php
  $cabecalho = getAllHeaders();
  foreach ($cabecalho as $key => $value) {
    echo "$key = $value <br>";
  }

  for ($_SERVER as $key => $value) {
    echo "$key = $value <br>";
  }


   ?>
  <hr>
<form action="imprimir.php" method="post">
Nome: <input type="text" name="nome"><br>
E-mail: <input type="text" name="email"><br>
Como você ficou sabendo desse site?<br> <!--//4.a-->
<input type="checkbox" name="sabendo[]" id="sabendo_google" value="Google"> <label for="sabendo_google">Google</label><br>
<input type="checkbox" name="sabendo[]" id="sabendo_indicação" value="Indicação"> <label for="sabendo_Indicação">Indicação</label><br>
<input type="checkbox" name="sabendo[]" id="sabendo_outros" value="Outros"> <label for="sabendo_outros">Outros</label><br>
<input type="radio" name="sexo" id="sexo_feminino" value="Feminino"> <label for="sexo_feminino">Feminino</label>
<input type="radio" name="sexo" id="sexo_masculino" value="Masculino"> <label for="sexo_masculino">Masculino</label><br>
<input type="checkbox" name="termosecondicoes" id="termos_e_condicoes" value="Termosecondições"> <label for="termos_e_condicoes">Termos e Condições</label><br>


</select>

<input type="submit" value="Enviar">
</form>
</body>
</html>
