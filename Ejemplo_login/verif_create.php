<?php
  require_once("bd.php");
  if (isset($_POST['user']) &&
      isset($_POST['password']) &&
      isset($_POST['name']) &&
      isset($_POST['email']) &&
      isset($_POST['email2']) ) {
        if (!checkUserId($_POST['user'])) {
          //Error 2, el nombre de usuario ya existe
          header("location:create.php?error=2");
        }else if(!checkEmail($_POST['email'])){
          //Error 3, correo electrónico ya está registrado
          header("location:create.php?error=3");
        }else if(checkEmail($_POST['email']) != checkEmail($_POST['email2'])){
          //Error 4, los correos no coinciden
          header("location:create.php?error=4");
        }else if (!createUser($_POST['user'], $_POST['password'], $_POST['name'],
                             $_POST['email'])) {
          //Error 5, Error en la creación del usuario, inténtelo más tarde
          header("location:create.php?error=5");
        }else{
          // Error 0, el usuario se ha creado correctamente
          header("location:create.php?error=0");
        }
  }else{
    // Error 1, falta rellenar algún campo
    header("location:create.php?error=1");
  }

?>
