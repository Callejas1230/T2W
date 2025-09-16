<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ci = $_POST["ci"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    $db = mysqli_connect('localhost', 'root', '', 'sitio');
    $sql = "INSERT INTO persona (CI, nombre, apellido) VALUES ('$ci', '$nombre', '$apellido')";
    $resultado = mysqli_query($db, $sql);
}
header("Location: index.php");
?>
