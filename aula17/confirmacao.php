<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Confirmação</title>
  </head>
  <body>
    <?php
      if ($_GET) {
        $nome_usuario = $_GET['name'];
        $email = $_GET['email'];
        $idade = $_GET['idade'];
        $hobbies = $_GET['hobbies'];

    ?>

      <p>Agradecemos a sua inscrição, <?php echo $nome_usuario; ?>. Você disse que tem <?php echo $idade; ?> anos.
Registramos o seu e-mail: <?php echo $email ?>. Obrigado!</p>

    <?php  } ?>
        <p>Hobbies:
          <ul>
            <?php foreach ($hobbies as $hobbie):?>
              <li><?php echo $hobbie; ?></li>
            <?php endforeach; ?>
          </ul>

        </p>
  </body>
</html>
