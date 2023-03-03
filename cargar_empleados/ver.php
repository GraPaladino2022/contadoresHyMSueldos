<!DOCTYPE html>
<html>
<head>
	<title>Ver empleados cargados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php //include("cabecera.php"); ?>
	<section id="inicioA">
		<?php
		include("conexion.php");

		$consultar_emp = mysqli_query($datos_base, "SELECT * FROM ingresos ORDER BY apellido");

		while($listar_emp = mysqli_fetch_assoc($consultar_emp)) {
		?>
			<div class="empleados">
				<!--<div class="imagen_emp">
					<img src="imagenes/<?php echo $listar_emp['imagen']; ?>">
				</div>-->
				<div class="info_empA">
					<p class="txt_negro">Fecha de hoy: <?php echo $listar_emp['fecha']; ?></p>
					<p>Empresa: <?php echo $listar_emp['empresa']; ?></p>
					<p>Nombre: <?php echo $listar_emp['nombre']; ?></p>
					<p>Apellido: <?php echo $listar_emp['apellido']; ?></p>
					<p>DNI:  <?php echo $listar_emp['DNI']; ?></p>
					<p>Cuil: <?php echo $listar_emp['cuil']; ?></p>
					<p>Calle: <?php echo $listar_emp['domicilio1']; ?></p>
					<p>Número: <?php echo $listar_emp['domicilio2']; ?></p>
					<p>Localidad: <?php echo $listar_emp['domicilio3']; ?></p>
					<p>Código postal: <?php echo $listar_emp['domicilio4']; ?></p>
					<p>Provincia: <?php echo $listar_emp['domicilio5']; ?></p>
					<p>Teléfono: <?php echo $listar_emp['telefono']; ?></p>
					<p>Categoría:  <?php echo $listar_emp['categoria']; ?></p>
					<p>Fecha de ingreso: <?php echo $listar_emp['fecha_ingreso']; ?></p>
					<p>Estado Civil: <?php echo $listar_emp['estado_civil']; ?></p>
					<p>Cantidad de hijos: <?php echo $listar_emp['cant_hijos']; ?></p>
					<p>Banco: <?php echo $listar_emp['banco']; ?></p>
					<p>CBU: <?php echo $listar_emp['cbu']; ?></p>
					<p>Jornada: <?php echo $listar_emp['jornada']; ?></p>
					<p>Valor Hora:  <?php echo $listar_emp['valor_hora']; ?></p>
					<p>Remuneración: <?php echo $listar_emp['remuneracion']; ?></p>
					<p>Obra Social: <?php echo $listar_emp['obra_social']; ?></p>
					<p>Sindicato: <?php echo $listar_emp['sindicato']; ?></p>
				
					<!--<h4><?php echo $listar_emp['fecha']." ". $listar_emp['empresa']." ".$listar_emp['nombre']." ".$listar_emp['apellido']." ".$listar_emp['DNI']." ".$listar_emp['cuil']." ".$listar_emp['domicilio1']." ".$listar_emp['domicilio2']." ".$listar_emp['domicilio3']." ".$listar_emp['domicilio4']." ".$listar_emp['domicilio5']." ".$listar_emp['telefono']." ".$listar_emp['categoria']." ".$listar_emp['fecha_ingreso']." ".$listar_emp['estado_civil']." ".$listar_emp['cant_hijos']." ".$listar_emp['banco']." ".$listar_emp['cbu']." ".$listar_emp['jornada']." ".$listar_emp['valor_hora']." ".$listar_emp['remuneracion']." ".$listar_emp['obra_social']." ".$listar_emp['sindicato']; ?></h4>-->
					<p><?php echo $listar_emp['consulta']; ?></p>
					<p><a href="editar.php?id=<?php echo $listar_emp['id_us']; ?>">Editar</a> - <a href="eliminar.php?id=<?php echo $listar_emp['id_us']; ?>">Eliminar</a></p>
				</div>
				<div class="borrar"></div>
			</div>

		<?php } ?>
	</section>
	<?php 
	//include("pie.php");
	?>
</body>
</html>