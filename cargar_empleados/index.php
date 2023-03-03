<!DOCTYPE html>
<html>
<head>
	<title>Cargar empleados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos1.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header id="cabecera">
	<div class="col-lg-12 col-sm-12" id="contacto2">
		<div id="marca">
			<h1>M y H</h1>
			<h2>Estudio Contable</h2>
		</div>
	</div>
</header>		
	<?php //include("cabecera.php"); ?>
	<!--agregue este nav-->
	<nav id="botonera_principalA">
				<ul>
					<li><a href="index.php" target="new">Cargar empleados a ingresar</a></li>
					<li><a href="ver.php" target="new">Ver Altas</a></li>	
					<li><a href="cargar_empleados/index.php" target="new">Cargar novedades de período</a></li>
					<li><a href="cargar_empleados/index.php" target="new">Ver novedades</a></li>	
				</ul>	
		</nav>
	<section id="inicioA">
		<div id="inicioAA">
		<form method="POST" action="cargar_empleado.php">
			<input class="formularioA" type="date" name="fecha" placeholder="Fecha de hoy:" >
				<input type="text" name="empresa" placeholder="Nombre de la empresa:" required>
                <input type="text" name="nombre" placeholder="Nombre:" required>
                <input type="text" name="apellido" placeholder="Apellido:" required>
               <!-- <input type="hidden" name="id" value= "<?php //echo $datos_emp['id_us'] ?>">-->
                <input type="number" name="DNI" placeholder="DNI:" required>
                <input type="text" name="cuil" placeholder="Cuil:" required>
                <input type="text" name="domicilio1" placeholder="Domicilio, Calle:" required>
                <input type="text" name="domicilio2" placeholder="Número:">
                <input type="text" name="domicilio3" placeholder="Localidad:" required>
                 <input type="text" name="domicilio4" placeholder="Código postal:">
                 <input type="text" name="domicilio5" placeholder="Provincia:">
                <input type="text" name="telefono" placeholder="Teléfono:">
                <input type="text" name="categoria" placeholder="Categoría:" required>
                <input type="date" name="fecha_ingreso" placeholder="Fecha de Ingreso:" required>
                <input type="text" name="estado_civil" placeholder="Estado Civil:">
                <input type="number" name="cant_hijos" placeholder="Cantidad de hijos:">
                <input type="text" name="banco" placeholder="Cuenta bancaria en el banco:">
                <input type="text" name="cbu" placeholder="CBU:">
                <input type="text" name="jornada" placeholder="Jornada:">
                <input type="text" name="valor_hora" placeholder="Valor hora:" required>
                <input type="text" name="remuneracion" placeholder="Remuneración:" required>
                <input type="text" name="obra_social" placeholder="Obra Social:" required>
                <input type="text" name="sindicato" placeholder="Sindicato:">
                <textarea name="consulta" rows="6" placeholder="Comentarios:"></textarea>
				<input class="container__submit" type="submit" value="Cargar">
		</form>
		<?php
		if(isset($_GET['ok'])) {
			echo "<h4>Empleado cargado!</h4>";
		}
		?>
	</div>
	<div id="inicioB">

		<?php
			include("ver.php")
		?>
	</div>
	</section>
	<?php //include("pie.php"); ?>
</body>
</html>