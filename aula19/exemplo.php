<?php

//criar e editar arquivo
  //$caminhoDoArquivo = "hobbies.txt";

  // $recurso = fopen($caminhoDoArquivo, 'w');
  // fwrite($recurso, "Eat \n");
  // fwrite($recurso, "Sleep \n");
  // fwrite($recurso, "Code \n");
  //
  // fclose($recurso);
  //
  // echo $caminhoDoArquivo;

//ler conteudo do arquivo

  // $caminhoDoArquivo = "hobbies.txt";
  //
  // $recurso = fopen($caminhoDoArquivo, 'r');
  // $tamanhoDoArquivo = filesize($caminhoDoArquivo);
  // $conteudoDoArquivo = fread($recurso, $tamanhoDoArquivo);
  //
  // echo $conteudoDoArquivo;
  //
  // fclose($recurso);

//ler conteudo com file_get_contents()

  // $caminhoDoArquivo = "hobbies.txt";
  // $hobbies = file_get_contents($caminhoDoArquivo);
  //
  // echo $hobbies;

//editar arquivo com file_put_contents()

  // $caminhoDoArquivo = "hobbies.txt";
  // $hobbies = file_get_contents($caminhoDoArquivo);
  //
  // $hobbies .= "\nJogar\nXingar\nChapar\nFazer o Elvis";
  //
  // file_put_contents($caminhoDoArquivo, $hobbies);

//imprimir conteudo linha a linha
  // $caminhoDoArquivo = "hobbies.txt";
  // $recurso = fopen($caminhoDoArquivo, 'r');
  //
  // if ($recurso){
  //     while (($linha = fgets($recurso)) !== false) {
  //       echo "Meu hobby favorito é $linha <br>";
  //     }
  // }
  // fclose($recurso);

  //BORA NO JSON :D

  // $meuJson = "categorias.json";
  // $recurso = fopen($meuJson, 'r');
  // $tamanho = filesize($meuJson);
  // $conteudo = fread($recurso, $tamanho);
  // fclose($recurso);
  //
  // // echo $conteudo;
  // //
  // // var_dump($conteudo);
  // $jsonParaArray = json_decode($conteudo, true);
  // //var_dump($jsonParaArray);
  //
  // echo "Categorias: <br>";
  //
  // $listaCategorias = $jsonParaArray["categorias"];
  //
  // foreach ($listaCategorias as $categoria) {
  //   echo "$categoria <br>";
  //}

  $meuJson = "usuarios.json";
  $conteudo = file_get_contents($meuJson);

  $listaUsuarios = $jsonParaArray["usuarios"];

  //var_dump($listaUsuarios);

  foreach ($listaUsuarios as $usuario) {
    foreach ($usuario as $key => $value) {
      echo "$key: $value <br>";
    }
  }
 ?>
