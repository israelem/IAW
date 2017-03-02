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
            # code...
            break;
          case 1:
            # code...
            break;
          case 2:
            # code...
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
    <form action="verif_create.html" method="post">
      <p>ID usuario: <input type="text" name="user"></p>
      <p>Contraseña: <input type="password" name="password"></p>
      <p>Nombre: <input type="text" name="name"></p>
      <p>Correo electrónico: <input type="text" name="email"></p>
      <p>Repita correo: <input type="text" name="email2"></p>
    </form>
  </body>
</html>
