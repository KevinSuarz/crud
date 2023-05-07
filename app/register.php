<?php
  include 'db.php';

  $newCorreo = $_POST['signup__email'];
  $newPswrd = $_POST['signup__pswrd'];
  $newPswrdrptd = $_POST['signup__pswrdrptd'];

  if($newPswrd == $newPswrdrptd){
    $query = "INSERT INTO users (email, pswrd) VALUES ('$newCorreo', '$newPswrd')";
    if(mysqli_query($conn, $query)){
      echo 'Cuenta creada exitosamente';
      header('Location: ../index.php');
    }else{
      echo 'Error al crear la cuenta: ' . mysqli_error($conn);
    }
  }else{
    echo 'las contraseñas no coinciden';
  };

?>