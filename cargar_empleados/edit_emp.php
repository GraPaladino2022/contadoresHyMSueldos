<?php
$fecha_edit = $_POST['fecha'];
$id_edit = $_POST['id'];
$nombre_edit = $_POST['nombre'];
//$id_edit = $_POST['id'];
$apellido_edit = $_POST['apellido'];
$DNI_edit = $_POST['DNI'];
$cuil_edit = $_POST['cuil'];
$domicilio1_edit = $_POST['domicilio1'];
$domicilio2_edit = $_POST['domicilio2'];
$domicilio3_edit = $_POST['domicilio3'];
$domicilio4_edit = $_POST['domicilio4'];
$domicilio5_edit = $_POST['domicilio5'];
$telefono_edit = $_POST['telefono'];
$categoria_edit = $_POST['categoria'];
$fecha_ingreso_edit = $_POST['fecha_ingreso'];
$estado_civil_edit = $_POST['estado_civil'];
$cant_hijos_edit = $_POST['cant_hijos'];
$banco_edit = $_POST['banco'];
$cbu_edit = $_POST['cbu'];
$jornada_edit = $_POST['jornada'];
$valor_hora_edit = $_POST['valor_hora'];
$remuneracion_edit = $_POST['remuneracion'];
$obra_social_edit = $_POST['obra_social'];
$sindicato_edit = $_POST['sindicato'];
$consulta_edit = $_POST['consulta'];
include("conexion.php");

mysqli_query($datos_base, "UPDATE ingresos SET fecha = '$fecha_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET nombre = '$nombre_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET apellido = '$apellido_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET DNI = '$DNI_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET cuil = '$cuil_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET domicilio1 = '$domicilio1_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET domicilio2 = '$domicilio2_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET domicilio3 = '$domicilio3_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET domicilio4 = '$domicilio4_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET domicilio5 = '$domicilio5_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET telefono = '$telefono_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET categoria = '$categoria_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET fecha_ingreso = '$fecha_ingreso_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET estado_civil = '$estado_civil_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET cant_hijos = '$cant_hijos_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET banco = '$banco_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET cbu = '$cbu_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET jornada = '$jornada_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET valor_hora = '$valor_hora_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET remuneracion = '$remuneracion_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET obra_social = '$obra_social_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET sindicato = '$sindicato_edit' WHERE id_us = $id_edit");
mysqli_query($datos_base, "UPDATE ingresos SET consulta = '$consulta_edit' WHERE id_us = $id_edit");
header("Location: ver.php");
?>