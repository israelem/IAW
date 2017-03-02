<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar sesión</title>
  </head>
  <body>
    <?php
      if (isset($_GET['error'])){
        switch ($_GET['error']) {
          case 0:

            break;
          case 1:

            break;
          case 2:

            break;
        }
      }
    ?>
    <p>Introduzca nombre de usuario y contraseña</p>
    <form action="verig_login.php" method="post">
      <p>Usuario: <input type="text" name="user" value=""></p>
      <p>Contraseña: <input type="password" name="password" value=""></p>
      <input type="submit" name="send" value="Iniciar sesión">
    </form>
  </body>
</html>
