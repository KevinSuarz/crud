<?php
include 'db.php';

if (isset($_POST['buscar'])) {
  $palabra = $_POST['buscar'];
  $query = "SELECT * FROM tasks WHERE title LIKE '%{$palabra}%' OR description LIKE '%{$palabra}%'";
  $resultado = mysqli_query($conn, $query);

  if (mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
      echo "<p>{$row['title']}</p>";
      echo "<p>{$row['description']}</p>";
      echo "<p>{$row['creationDate']}</p>";
    }
  } else {
    echo "No se encontraron resultados.";
  }
}
?>
