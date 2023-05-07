<form action="../app/taskPush.php" class="tasks__form" method="post">
  <h2 class="tasks__title"><i class="fa-solid fa-list-check"></i> Tareas</h2>
  <input type="text" placeholder="Tarea" name="taskTitle" required>
  <input type="text" placeholder="PDescripción" name="taskDescription" required>
  <input type="submit" value="+ Crear Tarea">
</form>

<table class="tasks__table">
  <tr class="tasks__tableHead">
    <td>id</td>
    <td>Titulo Tarea</td>
    <td>Descripción</td>
    <td>Fecha de creación</td>
  </tr>
  <?php
    $result = mysqli_query($conn,"SELECT * FROM tasks");
    while($row = mysqli_fetch_assoc($result)){
      echo
        "<tr class='tasks__tableRow'>
          <td>".$row["id"]."</td>
          <td>".$row["title"]."</td>
          <td>".$row["description"]."</td>
          <td>".$row["creationDate"]."</td>
          <td id='delete' class='delete'><a href='../app/taskDelete.php?id=".$row['id']."'><i class='fa-solid fa-square-xmark'></i></a></td>
        </tr>";
    };
  ?>
</table>