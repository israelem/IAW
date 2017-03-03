<?php
  session_start();
  if (!isset($_SESSION['user']))
    // Error 4, Es necesario iniciar sesión
    header("location:login.php?error=4");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "<p>Bienvenido " . $_SESSION['user'] . "</p>" ;
    ?>
    <p><a href="close_session.php">Cerrar sesión</a></p>
  </body>
</html>
