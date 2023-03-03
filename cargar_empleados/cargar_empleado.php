<?php
include('conexion.php');
//para recibir los datos
$fecha = $_POST['fecha'];
$empresa = $_POST['empresa'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$DNI = $_POST['DNI'];
$cuil = $_POST['cuil'];
$domicilio1 = $_POST['domicilio1'];
$domicilio2 = $_POST['domicilio2'];
$domicilio3 = $_POST['domicilio3'];
$domicilio4 = $_POST['domicilio4'];
$domicilio5 = $_POST['domicilio5'];
$telefono = $_POST['telefono'];
$categoria = $_POST['categoria'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$estado_civil = $_POST['estado_civil'];
$cant_hijos = $_POST['cant_hijos'];
$banco = $_POST['banco'];
$cbu = $_POST['cbu'];
$jornada = $_POST['jornada'];
$valor_hora = $_POST['valor_hora'];
$remuneracion = $_POST['remuneracion'];
$obra_social = $_POST['obra_social'];
$sindicato = $_POST['sindicato'];
$consulta = $_POST['consulta'];


mysqli_query($datos_base, "INSERT INTO ingresos VALUES (DEFAULT, '$fecha', '$empresa', '$nombre', '$apellido', '$DNI', '$cuil', '$domicilio1', '$domicilio2', '$domicilio3', '$domicilio4', '$domicilio5', '$telefono', '$categoria', '$fecha_ingreso', '$estado_civil', '$Cant_hijos', '$banco', '$cbu', '$jornada', '$valor_hora', '$remuneracion', '$obra_social', '$sindicato','$consulta')");

header("Location: index.php?ok");
?>