<?php
include("conexion.php");
$id_us = $_GET['id'];
mysqli_query($datos_base, "DELETE FROM ingresos WHERE id_us=$id_us");
header("Location: ver.php");
?>