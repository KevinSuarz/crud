
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/main.css">
  <script src="https://kit.fontawesome.com/459bdb9743.js" crossorigin="anonymous"></script>
  <title>inicio</title>
</head>
<body>

<?php
  session_start();
  // include '../components/header.php';
  include '../app/db.php';
  include '../components/navbar.php';
  
  if(!isset($_SESSION['email'])){
    header('Location: ../index.php');
  };
?>

<div class="tasks">
  <?php
    include '../components/tasks.php';
  ?>
</div>


<?php

  include'../components/footer.php';

?>
