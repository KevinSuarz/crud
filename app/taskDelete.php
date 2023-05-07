<?php
  include 'db.php';

  if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    $id = mysqli_real_escape_string($conn, $id);
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id === false) {
      die("ID inválido");
    }

    $query = "DELETE FROM tasks WHERE id = $id";
    $resultado = mysqli_query($conn, $query);

    if ($resultado) {
      echo "Registro eliminado exitosamente.";
    } else {
      echo "Error al eliminar el registro: " . mysqli_error($conn);
    }
    
  } else {
    echo "ID no especificado.";
  }
  header('Location: ../pages/bienvenida.php')
?>
