<?php
$conn = mysqli_connect("localhost", "root", "", "crud");

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";
?>
