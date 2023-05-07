<?php

  include"../app/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
  
</body>
</html>

<div class="container">
  <form action="../app/register.php" method="post" class="signup">
    <h2 class="login__title">Registrate</h2>
    <p class="login__subtitle">registrate pero en pequeño y gris</p>
    
    <input type="text" placeholder="Correo electrónico" name="signup__email" required class="login__email">
    
    <input type="password" placeholder="Contraseña" name="signup__pswrd" required class="login__pswrd">

    <input type="password" placeholder="Repite la contraseña" name="signup__pswrdrptd" required class="login__pswrd">
    
    <input type="submit" value="Registrate" class="login__submit">
    
    <p class="login__signupquest">Ya tienes una cuenta?</p>
    
    <a href="../index.php" class="login__signup">Inicia Sesión</a>
  </form>
</div>

<?php
  include '../components/footer.php';
?>