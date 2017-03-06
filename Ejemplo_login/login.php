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
            echo "<h2>Inicio de sesión correcto</h2>";
            break;
          case 1:
            echo "<h2>Rellene usuario y contraseña</h2>";
            break;
          case 2:
            echo "<h2>Contrseña no válida</h2>";
            break;
          case 3:
            echo "<h2>Nombre de usuario no válido</h2>";
            break;
          case 4:
            echo "<h2>Inicie sesión antes de entrar</h2>";
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
