<?php
  include("user.php");

  $email = $_POST['email'];
  $password = $_POST['password'];
  $user = new user($email, $password);

  if($getUsername = $user->login()){
    header("Location: index.php");
  } else {
    echo "Akun yang anda coba masukan SALAH <br>";
    echo " Silahkan coba lagi ";
  }

?>