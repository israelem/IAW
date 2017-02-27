<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require_once("bd.php");
      $password = "hola";
      $hash = password_hash($password, PASSWORD_DEFAULT);
      if (password_verify($password, $hash)) {
          echo "La contraseña es correcta. <br><br>";
          echo "El hash de la contraseña $password es $hash";
      } else {
        echo "La contraseña no es correcta";
      }

    ?>
  </body>
</html>
