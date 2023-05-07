<?php
  session_start();

  include'db.php';

  $email = $_POST['login__email'];
  $password = $_POST['login__pswrd'];

  $query = "SELECT * FROM users WHERE email = '$email' AND pswrd = '$password'";

  $resultado = mysqli_query($conn, $query);

  if(mysqli_num_rows($resultado) == 1){

    $_SESSION['email'] = $email;
    header("Location: ../pages/bienvenida.php");

  }else{
    echo 'Correo y/o contraseña incorrectos';
  }
?>