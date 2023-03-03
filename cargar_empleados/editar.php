<!DOCTYPE html>
<html>
<head>
	<title>Editar empleados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<!--<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,500;1,500&display=swap" rel="stylesheet">-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
	<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>-->
</head>
<body>
	<?php include('cabecera.php'); ?>
	<section id="inicio">
		<?php
		include("conexion.php");
		$id_us = $_GET['id'];
		$consultar_emp = mysqli_query($datos_base, "SELECT * FROM ingresos WHERE id_us = $id_us");
		$datos_emp = mysqli_fetch_assoc($consultar_emp);
		?>
		<form method="POST" action="edit_emp.php">
			<h4><?php echo $datos_emp['fecha']." ".$datos_emp['empresa']." ".$datos_emp['nombre']." ".$datos_emp['apellido']." ".$datos_emp['DNI']." ".$datos_emp['cuil']." ".$datos_emp['domicilio1']." ".$datos_emp['domicilio2']." ".$datos_emp['domicilio3']." ".$datos_emp['domicilio4']." ".$datos_emp['domicilio5']." ".$datos_emp['telefono']." ".$datos_emp['categoria']." ".$datos_emp['fecha_ingreso']." ".$datos_emp['estado_civil']." ".$datos_emp['cant_hijos']." ".$datos_emp['banco']." ".$datos_emp['cbu']." ".$datos_emp['jornada']." ".$datos_emp['valor_hora']." ".$datos_emp['remuneracion']." ".$datos_emp['obra_social']." ".$datos_emp['sindicato']; ?></h4>
			
			
			<input type="hidden" name="id" value="<?php echo $datos_emp['id_us']; ?>">
			<textarea name="fecha" rows="3"><?php echo $datos_emp['fecha']; ?>
			</textarea>
			<textarea name="nombre" rows="3"><?php echo $datos_emp['nombre']; ?>
			</textarea>
			<textarea name="apellido" rows="3"><?php echo $datos_emp['apellido']; ?>
			</textarea>
			<textarea name="DNI" rows="3"><?php echo $datos_emp['DNI']; ?>
			</textarea>
			<textarea name="cuil" rows="3"><?php echo $datos_emp['cuil']; ?>
			</textarea>
			<textarea name="domicilio1" rows="3"><?php echo $datos_emp['domicilio1']; ?>
			</textarea>
			<textarea name="domicilio2" rows="3"><?php echo $datos_emp['domicilio2']; ?>
			</textarea>
			<textarea name="domicilio3" rows="3"><?php echo $datos_emp['domicilio3']; ?>
			</textarea>
			<textarea name="domicilio4" rows="3"><?php echo $datos_emp['domicilio4']; ?>
			</textarea>
			<textarea name="domicilio5" rows="3"><?php echo $datos_emp['domicilio5']; ?>
			</textarea>
			<textarea name="telefono" rows="3"><?php echo $datos_emp['telefono']; ?>
			</textarea>
			<textarea name="categoria" rows="3"><?php echo $datos_emp['categoria']; ?>
			</textarea>
			<textarea name="fecha_ingreso" rows="3"><?php echo $datos_emp['fecha_ingreso']; ?>
			</textarea>
			<textarea name="estado_civil" rows="3"><?php echo $datos_emp['estado_civil']; ?>
			</textarea>
			<textarea name="cant_hijos" rows="3"><?php echo $datos_emp['cant_hijos']; ?>
			</textarea>
			<textarea name="banco" rows="3"><?php echo $datos_emp['banco']; ?>
			</textarea>
			<textarea name="cbu" rows="3"><?php echo $datos_emp['cbu']; ?>
			</textarea>
			<textarea name="jornada" rows="3"><?php echo $datos_emp['jornada']; ?>
			</textarea>
			<textarea name="valor_hora" rows="3"><?php echo $datos_emp['valor_hora']; ?>
			</textarea>
			<textarea name="remuneracion" rows="3"><?php echo $datos_emp['remuneracion']; ?>
			</textarea>
			<textarea name="obra_social" rows="3"><?php echo $datos_emp['obra_social']; ?>
			</textarea>
			<textarea name="sindicato" rows="3"><?php echo $datos_emp['sindicato']; ?>
			</textarea>
			<textarea name="consulta" rows="3"><?php echo $datos_emp['consulta']; ?>
			</textarea>
			<input type="submit" value="Guardar cambios">
		</form>
	</section>
	<?php include('pie.php'); ?>
</body>
</html>