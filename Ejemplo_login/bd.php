<<<<<<< HEAD
<?php

define('SERVER_DB', '127.0.0.1');
define('USER_DB', 'root');
define('PASS_DB', '');
define('NAME_DB', 'test');

function login($user, $password){
  $db = mysqli_connect(SERVER_DB, USER_DB, PASS_DB, NAME_DB);
  $query = "SELECT * FROM usuario WHERE id = $user";
  $result = mysqli_query($db, $query);
  if ($result && mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
      $return = true;
    }else{
        header("location:login.php?error=1");
    }
  }else{
    header("location:login.php?error=1");
  }
  mysqli_close($db);

  return $return;
}

function createUser($user, $password, $name, $email){
  $db = mysqli_connect(SERVER_DB, USER_DB, PASS_DB, NAME_DB);
  $query = "SELECT * FROM usuario WHERE id = $user";
  $resulto = mysqli_query($db, $query);
  if ($result && mysqli_num_rows($result) == 1) {
    header("location:create.php?error=2");
  }else if($result == false){
    header("location:create.php?error=1");
  }else{
    $insert = "INSERT INTO usuarios(id, password, nombre, correo)
                VALUES($user, $passhash, $name, $email)";
    $hashpass = password_hash($password, PASSWORD_DEFAULT);
    $ok = mysqli_query($db, $insert);
    if ($ok) {
      $return = true;
    }else{
      header("location:create.php?error=1");
    }
  }
  mysqli_close($db);
  return $return;
}

function checkUserId()
{
  # code...
}

?>
=======
<?php

define('SERVER_DB', '127.0.0.1');
define('USER_DB', 'root');
define('PASS_DB', '');
define('NAME_DB', 'test');

function login($user, $password){
  $db = mysqli_connect(SERVER_DB, USER_DB, PASS_DB, NAME_DB);
  $query = "SELECT * FROM usuario WHERE id = $user";
  $result = mysqli_query($db, $query);
  if ($result && mysqli_num_rows($result) == 1) {

  }else{
    header("location:login.php?error=1");
  }
  mysqli_close($db);
}

function createUser($db, $user, $password, $name, $email){
  $db = mysqli_connect(SERVER_DB, USER_DB, PASS_DB, NAME_DB);
  $query = "SELECT * FROM usuario WHERE id = $user";
  $resulto = mysqli_query($db, $query);
  if ($result && mysqli_num_rows($result) == 1) {
    header("location:create.php?error=2");
  }else if($result == false){
    header("location:create.php?error=1");
  }else{
    $insert = "INSERT INTO usuarios(id, password, nombre, correo)
                VALUES($user, $passhash, $name, $email)";
    $hashpass = password_hash($password, PASSWORD_DEFAULT);
    $ok = mysqli_query($db, $insert);
    return true;
  }
  mysqli_close($db);
}


?>
>>>>>>> origin/master
