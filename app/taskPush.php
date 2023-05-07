<?php
  include 'db.php';

  $newTitle = $_POST['taskTitle'];
  $newDescrp = $_POST['taskDescription'];
  $creationDate = date("Y-m-d H:i:s");
  $query = "INSERT INTO tasks (title, description, creationDate ) VALUES ('$newTitle', '$newDescrp','$creationDate')";
  $resultado = mysqli_query($conn, $query);
  header('Location: ../pages/bienvenida.php')
?>