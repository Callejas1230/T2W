<?php
if (isset($_GET["Aceptar"])) {
    $ci = $_GET["CI"]; // CI original
    $nuevo_ci = $_GET["nuevo_ci"]; // CI modificado
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];

    $db = mysqli_connect('localhost', 'root', '', 'sitio');
    $sql = "UPDATE persona SET CI='" . $nuevo_ci . "', nombre='" . $nombre . "', apellido='" . $apellido . "' WHERE CI=" . $ci;
    $resultado = mysqli_query($db, $sql);
}
header("Location: index.php");
?>
