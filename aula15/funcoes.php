    <?php
    $numeroMagico=40;

      ?>

    <?php
    function maior($num1, $num2, $num3){
      if ($num3===null) {
        return $num3===$numeroMagico;
      }
      if ($num1>$num2&&$num1>$num3){
        return $num1;
      }elseif ($num2>$num3) {
          return $num2;
        }else{
          return $num3;
        }
      }

      echo maior(1,2,"");
      ?>
      <?php
      function tabela($base, $limite){
        if ($limite===null) {
          return $limite===$numeroMagico;
        }
        $result= [];
        for ($i=$base; $i <= $limite ; $i++) {
          $result[]= $i;
        }
        return $result;
      }

      foreach (tabela(2,0) as $value) {
        echo "$value";
      }
      ?>
      <?php



       ?>
