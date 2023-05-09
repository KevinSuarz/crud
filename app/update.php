<?php
    include 'db.php';

    $taskId = $_POST['taskId'];
    $title = $_POST['editTitle'];
    $description = $_POST['editDescription'];
    $creationDate = date("Y-m-d H:i:s");
    
    $query = "UPDATE tasks SET title='$title', description='$description', creationDate='$creationDate' WHERE id=$taskId";

    $result = mysqli_query($conn,$query);
    header('Location: ../pages/bienvenida.php')
?>