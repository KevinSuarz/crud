<form action="app/process.php" method="post" class="login">
  <h2 class="login__title">Inicia Sesión</h2>
  <p class="login__subtitle">inicia sesión pero en pequeño y gris</p>
  
  <input type="text" placeholder="Correo electrónico" name="login__email" required class="login__email">
  
  <input type="password" placeholder="Contraseña" name="login__pswrd" required class="login__pswrd">
  
  <a href="#" class="login__forgot">Olvidaste la Contraseña?</a>
  
  <input type="submit" value="Ingresa" class="login__submit">
  
  <p class="login__signupquest">No tienes una cuenta?</p>
  
  <a href="components/signup.php" class="login__signup">Registrate</a>
</form>
