<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <p>exercicio 1</p>

    <?php

     for ($i=1; $i <101 ; $i++) {
       echo $i;
     }

     ?>

    <p>exercicio 2</p>

    <?php

     $num = rand(0,100);
     for ($i=0; $i <= $num; $i++) {
       echo $i;
      }

      ?>

    <p>exercicio 3</p>

    <?php

     $array =[0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
     for ($i = 0; $i < count($array); $i++){
       if ($array[$i] == 22) {
         break;
       }
       $valor = $array[$i];
      echo "2x$i=$valor <br/>";
    }
    ?>

    <p>exercicio 4</p>

    <?php

    $cara = 0;
        while($cara < 5){
          $moeda = rand(0,1);
          if($moeda == 1){
            $cara++;
          }
          $i++;
        }
        echo "Joguei a moeda $i vezes!";

        ?>

        <p>exercicio 5</p>

        <?php
        do{
          $moeda = rand(0,1);
          $i++;
        }while($moeda != 1);
          echo "Joguei a moeda $i vezes!";
          ?>

          <p>exercicio 6</p>

          <?php
          $nomes = ["Hendy", "Vini", "Vitu", "Thomás","Jess"];
          for ($i=0; $i < count($nomes); $i++) {
            echo "$nomes[$i] ";
          }
          $i = 0;
          while($i < count($nomes)){
            echo "$nomes[$i] ";
            $i++;
          }
          $a = 0;
          do{
            echo "$nomes[$a] ";
            $a++;
          }while($a < count($nomes))
          ?>

          <p>exercicio 7</p>

          <?php

          $num = [];//criando um array vazio
          for ($i=0; $i < 10; $i++) {
            $num[$i] = mt_rand(0,10);// atribuindo numeros aleatorios ao array
          }

          for ($i=0; $i < count($num); $i++) {
            echo $num [$i]. ",";
            if($num[$i] == 5){
              echo "<br>Encontramos um 5<br>";
              break;
            }
          }
          ?>
          <br>
          <?php

          foreach ($num as $value) {
            echo $value. ", ";
            if($value == 5){
              echo "Encontramos um 5";
              break;
            }
          }
          ?>
          <br>
          <?php
          $i = 0;//contador do while e do/while
          while ($i < count($num)) {
            echo $num[$i]. ", ";//imprime os valores de cada posicao
            if($num[$i] == 5){// verifica se o valor da posicao atual e 5
              echo "<br> Encontramos um 5 <br>";// avisa quando encontra um 5
              break;// para o loop
            }
            $i++;// acrescenta +1 no contador
          }
          ?>
          <br>
          <?php
          do {
            echo $num[$i]. ", ";
            if($num[$i] == 5){
              echo "<br> Encontramos um 5 <br>";
              break;
            }
            $i++;
          } while ($i < count($num));

           ?>

          <p>exercicio 8</p>

          <?php
          $letter = range('a', 'o');
          foreach ($letter as $key => $value) {
            echo "<br> Na posição $key, está o valor $value.";
          }
          ?>

          <p>exercicio 9</p>
          <?php
          $mascote = ["animal" => "gato",
                      "idade" => "17",
                      "altura" => "1,60",
                      "nome" => "maria"];
          foreach ($mascote as $key => $value) {
            echo "$key: $value <br>";
            }
           ?>
           <p>exercicio 11</p>
           <?php
           $ceu = ["Itália"=>"Roma",
                   "Luxemburgo"=>"Luxemburgo",
                   "Bélgica"=> "Bruxelas",
                   "Dinamarca"=>"Copenhagen",
                   "Finlândia"=>"Helsinki",
                   "França" => "Paris",
                   "Eslováquia"=>"Bratislava",
                   "Eslovênia"=>"Liubliana",
                   "Alemanha" => "Berlim",
                   "Grécia" =>"Atenas",
                   "Irlanda"=>"Dublin",
                   "Holanda"=>"Amsterdã",
                   "Portugal"=>"Lisboa",
                   "Espanha"=>"Madri",
                   "Suécia"=>"Estocolmo",
                   "Reino Unido"=>"Londres",
                   "Chipre"=>"Nicósia",
                   "Lituânia"=>"Vilnius",
                   "República Tcheca"=>"Praga",
                   "Estônia"=>"Tallinn",
                   "Hungria"=>"Budapeste",
                   "Letônia"=>"Riga",
                   "Malta"=>"Valletta",
                   "Áustria" => "Viena",
                   "Polônia"=>"Varsóvia"] ;
            foreach ($ceu as $key => $value) {
              echo "<br> A capital da $key é $value";
            }
            ?>

            <p>exercicio 12</p>
            <?php
            $ceu = [
              "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
              "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
              "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
              "França" => ["Paris", "Nantes", "Lyon"],
              "Itália" => ["Roma", "Milão", "Veneza"],
              "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
            ];
              foreach ($ceu as $key => $value) {
                echo "As cidades da $key são:<br> ";
                echo "<ul>";
          foreach ($value as $value) {
            echo "<li> $value</li>";
          }
          echo "</ul>";
              }

             ?>

            <p>exercicio 13</p>
            <?php
            $ceu = [
              "Argentina" => ["naAmerica" => true, ["Buenos Aires", "Córdoba", "Santa Fé"]],
              "Brasil" => ["naAmerica" => true, ["Brasília", "Rio de Janeiro", "São Paulo"]],
              "Colômbia" => ["naAmerica" => true, ["Cartagena", "Bogotá", "Barranquilla"]],
              "França" => ["naAmerica" => false, ["Paris", "Nantes", "Lyon"]],
              "Itália" => ["naAmerica" => false, ["Roma", "Milão", "Veneza"]],
              "Alemanha" => ["naAmerica" => false, ["Munique", "Berlim", "Frankfurt"]]
            ];
              foreach ($ceu as $key => $value) {
                if ($value["naAmerica"]) {
                echo "As cidades da $key são:<br> ";
                echo "<ul>";
          foreach ($value[0] as $v) {
            echo "<li> $v</li>";
          }
          echo "</ul>";
              }
            }
              ?>
  </body>
</html>
