<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos usuario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
	/* creamos sesiones para guardar los datos recogidos en el formulario anterior */
	$_SESSION['paisOrigen']=$_POST['paisOrigen'];
	$_SESSION['paisDestino']=$_POST['paisDestino'];
	$_SESSION['fecha']=$_POST['fecha'];
	?>
	<section class="container">
		<form action="datosPago.php" method="post">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" id="nombre" aria-describedby="nombre" name="nombre" required>
			</div>
			<div class="form-group">
				<label for="apellidos">Apellidos</label>
				<input type="text" class="form-control" id="apellidos" aria-describedby="apellidos" name="apellidos" required>
			</div>
			<div class="form-group">
				<label for="dni">Dni</label>
				<input type="text" class="form-control" id="dni" aria-describedby="dni" name="dni" pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))" title="Introduzca el dni" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" aria-describedby="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="direccion">Dirección</label>
				<input type="text" class="form-control" id="direccion" aria-describedby="direccion" name="direccion" required>
			</div>
			<div class="form-group">
				<label for="poblacion">Población</label>
				<input type="text" class="form-control" id="poblacion" aria-describedby="poblacion" name="poblacion" required>
			</div>
			<div class="form-group">
				<label for="codiPostal">Codigo postal</label>
				<input type="number" class="form-control" id="codiPostal" aria-describedby="codiPostal" name="codiPostal" pattern="\d{5}" required>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</section>
</body>
</html>