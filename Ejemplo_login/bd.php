<?php

//Constantes necesarias para la conexión de la BD
define('SERVER_DB', '127.0.0.1');
define('USER_DB', 'root');
define('PASS_DB', '');
define('NAME_DB', 'test');

function login($user, $password){
  $db = mysqli_connect(SERVER_DB, USER_DB, PASS_DB, NAME_DB);
  $query = "SELECT * FROM usuario WHERE id = $user";
  $query = mysqli_real_escape_string($db, $query);
  $result = mysqli_query($db, $query);
  if ($result && mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
      //Todo correcto
      $return = 0;
    }else{
      //Contraseña no válida
      $result = -1;
    }
  }else{
    //Usuario no válido
    $result = -2;
  }
  mysqli_close($db);

  return $return;
}

function createUser($user, $password, $name, $email){
  $db = mysqli_connect(SERVER_DB, USER_DB, PASS_DB, NAME_DB);
  $hashpass = password_hash($password, PASSWORD_DEFAULT);
  $insert = "INSERT INTO `usuarios` (`id`, `password`, `nombre`, `correo`)" .
            " VALUES($user, $hashpass, $name, $email)";
  $insert = mysqli_real_escape_string($db, $insert);
  $ok = mysqli_query($db, $insert);
  if ($ok) {
    $return = 0;
  }else{
    //Se produjo un eror en la creación del usuario
    $return = -1;
  }
  mysqli_close($db);

  return $return;
}

function checkUserId($user){
  $db = mysqli_connect(SERVER_DB, USER_DB, PASS_DB, NAME_DB);
  $query = "SELECT * FROM usuarios WHERE id = $user";
  $query = mysqli_real_escape_string($db, $query);
  $result = mysqli_query($db, $query);
  if($result && mysqli_num_rows($result) == 1){
    //El usuario ya existe
    $return = -1;
  }else{
    //El usuario no existe, todo correcto
    $return = 0;
  }
  mysqli_close($db);

  return $return;
}

function checkEmail($email){
  $db = mysqli_connect(SERVER_DB, USER_DB, PASS_DB, NAME_DB);
  $query = "SELECT * FROM usuarios WHERE correo = $email";
  $query = mysqli_real_escape_string($query);
  $result = mysqli_query($db, $query);
  if($result && mysqli_num_rows($result) == 1){
    //El correo ya está registrado
    $return = -1;
  }else{
    //El usuario no existe, todo correcto
    $return = 0;
  }
  mysqli_close($db);

  return $return;
}

?>
