<?php

define('SERVER_DB', '127.0.0.1');
define('USER_DB', 'root');
define('PASS_DB', '');
define('NAME_DB', 'test')



private $db;

function conectar_bd($bd){
  $bd = mysqli_connect(SERVER_DB, USER_DB, PASS_DB, NAME_DB);
  if($bd){
    return true;
  }else{
    return false;
  }
}

function login($db, $user, $password){
  $query = "SELECT * FROM usuario WHERE id = $user";
  $result = mysqli_query($query);
  if ($result && mysqli_num_rows($result) == 1) {

  }else{
    header("location:login.php?error=1");
  }
}

?>
