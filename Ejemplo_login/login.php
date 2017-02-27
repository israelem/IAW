<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar sesión</title>
  </head>
  <body>
    <?php
      if (isset($_GET['error']) && $_GET['error']==1) {
        echo "<h1>Nombre de usuario o contraseña no válido</h1>";
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
