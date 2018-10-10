<?php
  if(isset($_FILES['arquivo'])){
  //   echo "<pre>";
  //   var_dump($_FILES['arquivo']);
  //   echo "</pre>";
  if($_FILES['arquivo']['error'] === UPLOAD_ERR_OK){
    $caminhoSalvar = "uploads/".$_FILES['arquivo']['name'];
    if(file_exists($caminhoSalvar)){
      echo "ERRO: Arquvio ja existe!";
    }else{

    $ok = move_uploaded_file($_FILES['arquivo']['tmp_name'], $caminhoSalvar);
    if($ok){
      echo "Arquivo enviado com sucesso!";
        }
      }
    }
  }


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload</title>
  </head>
  <body>
    <form class="" action="upload.php" method="post" enctype="multipart/form-data">
      <label for="arquivo">Enviar arquivo:</label><br>
      <input type="file" name="arquivo" id="arquivo"><br>
      <button type="submit">Enviar</button>

    </form>
  </body>
</html>
