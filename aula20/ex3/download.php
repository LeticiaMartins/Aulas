<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $dir = opendir('uploads');
    while (false !== ($arquivo = readdir($dir))) {
      if ($arquivo !== "." && != "..") {
        echo "<a href='uploads/$arquivo' download>$arquivo</a><br>";
      }
    }
    closedir($dir);
    ?>
  </body>
</html>
