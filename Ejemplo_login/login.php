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
          case 3:
            # code...
            break;
          case 4:
            # code...
            break;
        }
      }
    ?>
    <p>Introduzca nombre de usuario y contraseña</p>
    <form action="verif_login.php" method="post">
      <?php
      if (isset($_SESSION['user'])) {
        echo '<p>Usuario: <input type="text" name="user" value="' .
              $_SESSION['user'] . '"></p>';
      }else {
        echo '<p>Usuario: <input type="text" name="user" value=""></p>';
      }
      ?>
      <p>Contraseña: <input type="password" name="password" value=""></p>
      <input type="submit" name="send" value="Iniciar sesión">
    </form>
  </body>
</html>
