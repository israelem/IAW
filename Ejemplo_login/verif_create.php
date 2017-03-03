<?php
  require_once("bd.php");
  if (isset($_POST['user']) &&
      isset($_POST['password']) &&
      isset($_POST['name']) &&
      isset($_POST['email']) &&
      isset($_POST['email2']) ) {
        if (checkUserId($_POST['user']) == -1) {
          //Error 2, el nombre de usuario ya existe
          header("location:create.php?error=2");
        }elseif(checkEmail($_POST['email']) == -1){
          //Error 3, correo electrónico ya está registrado
          header("location:create.php?error=3");
        }elseif($_POST['email'] != $_POST['email2']){
          //Error 4, los correos no coinciden
          header("location:create.php?error=4");
        }elseif (createUser($_POST['user'], $_POST['password'], $_POST['name'],
                             $_POST['email']) == -1) {
          //Error 5, Error en la creación del usuario, inténtelo más tarde
          header("location:create.php?error=5");
        }else{
          // Error 0, el usuario se ha creado correctamente
          //header("location:create.php?error=0");
          header("location:loghin.php");
        }
  }else{
    // Error 1, falta rellenar algún campo
    header("location:create.php?error=1");
  }

?>
