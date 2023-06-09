<?php 
  include '../app/db.php';
?>
<div class="bz">
  <form action="../app/taskPush.php" class="tasks__form" method="post">
    <h2 class="tasks__title"><i class="fa-solid fa-list-check"></i> Tareas</h2>
    <input type="text" placeholder="Tarea" name="taskTitle" required>
    <input type="text" placeholder="PDescripción" name="taskDescription" required>
    <input type="submit" value="+ Crear Tarea">
  </form>
  <form action="../app/buscar.php" class="form__buscador" method="post">
    <input type="text" placeholder="buscador" class="buscador" name="buscar">
    <input type="submit" class="lupita" value="p">
  </form>
</div>


<table class="tasks__table">
  <tr class="tasks__tableHead">
    <td>id</td>
    <td>Titulo Tarea</td>
    <td>Descripción</td>
    <td>Fecha de creación</td>
  </tr>
  <?php
    $result = mysqli_query($conn,"SELECT * FROM tasks");
    if(isset($_GET['edit'])){
      $edit = $_GET['edit'];
    };
    while($row = mysqli_fetch_assoc($result)){
        if(isset($edit) && $edit == $row["id"]){
          echo
          "<form class='tasks__tableRow' method='post' action='../app/update.php'>
            <td>".$row["id"]."</td>
            <td><input type='text' name='editTitle' placeholder=".$row["title"]." required></td>
            <td><input type='text' name='editDescription' placeholder=".$row["description"]." required></td>
            <td>".$row["creationDate"]."</td>
            <td id='done' class='done'>
              <input type='hidden' name='taskId' value='".$row["id"]."'>
              <input type='submit' value='↑'>
            </td>
          </form>";
          unset($edit);
        }else {
          echo
          "<tr class='tasks__tableRow'>
            <td>".$row["id"]."</td>
            <td>".$row["title"]."</td>
            <td>".$row["description"]."</td>
            <td>".$row["creationDate"]."</td>
            <td id='delete' class='delete'>
              <a href='../app/taskDelete.php?id=".$row['id']."'>
                <i class='fa-solid fa-square-xmark remove'></i>
              </a>
              <a href='../pages/bienvenida.php?edit=".$row['id']."'>
                <i class='fa-solid fa-edit edit'></i>
              </a>
            </td>
          </tr>";
        };
    };
  ?>
</table>