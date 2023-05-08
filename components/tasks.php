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
    if(isset($_GET)){
      $edit = $_GET['edit'];
    };
    while($row = mysqli_fetch_assoc($result)){
        // var_dump($edit);
        if(isset($edit)){
          echo
          "<tr class='tasks__tableRow'>
            <td>".$row["id"]."</td>
            <td><input type='text' placeholder=".$row["title"]."></td>
            <td><input type='text' placeholder=".$row["description"]."></td>
            <td>".$row["creationDate"]."</td>
            <td id='delete' class='done'>
              <a href='../pages/bienvenida.php'>
                <i class='fa-solid fa-square-check'></i>
              </a>
            </td>
          </tr>";
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