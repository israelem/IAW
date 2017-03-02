<?php
  require_once("bd.php");
  session_start();
  if (isset($_POST['user']) &&
      isset($_POST['password'])) {
          switch (login($_POST['user'], $_POST['password'])) {
            case 0:
              //Todo correcto
              $_SESSION['user'] = $_POST['user'];
              header("location:index.php");
              break;
            case -1:
              //Error 2, Contraseña no válida
              header("location:login.php?error=2");
              break;
            case -2:
            //Error 3, Ususario no válido
            header("location:login.php?error=3");
              break;
          }
  }else{
    //Error 1, Hay que rellenar ambos campos
    header("location:login.php?error=1");
  }
?>
