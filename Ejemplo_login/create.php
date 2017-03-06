<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crear usuario</title>
  </head>
  <body>
    <?php
      if (isset($_GET['error'])) {
        switch ($_GET['error']) {
          case 0:
            echo "<h2>Usuario creado correctamente</h2>";
            break;
          case 1:
            echo "<h2>Rellene todos los campos</h2>";
            break;
          case 2:
            echo "<h2>El nombre de usuario ya existe</h2>";
            break;
          case 3:
            echo "<h2>El correo electrónico ya está registrado</h2>";
            break;
          case 4:
            echo "<h2>Los correos no coinciden</h2>";
            break;
          case 5:
            echo "<h2>Error al crear el usuario, inténtelo de nuevo</h2>";
            break;
        }
      }
    ?>
    <form action="verif_create.php" method="post">
      <p>ID usuario: <input type="text" name="user"></p>
      <p>Contraseña: <input type="password" name="password"></p>
      <p>Nombre: <input type="text" name="name"></p>
      <p>Correo electrónico: <input type="text" name="email"></p>
      <p>Repita correo: <input type="text" name="email2"></p>
      <p><input type="submit" name="crear" value="Crear usuario">
          <input type="reset" name="borrar" value="Borrar datos"></p>
    </form>
  </body>
</html>
