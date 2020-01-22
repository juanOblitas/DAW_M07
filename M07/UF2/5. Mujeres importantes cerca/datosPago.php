<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos pago</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
	/* creamos sesiones para guardar los datos recogidos en el formulario anterior y/o formularios anteriores*/
	/*$_SESSION['paisOrigen'];
	$_SESSION['paisDestino'];
	$_SESSION['fecha'];*/

	$_SESSION['nombre']=$_POST['nombre'];
	$_SESSION['apellidos']=$_POST['apellidos'];
	$_SESSION['dni']=$_POST['dni'];
	$_SESSION['email']=$_POST['email'];
	$_SESSION['direccion']=$_POST['direccion'];
	$_SESSION['poblacion']=$_POST['poblacion'];
	$_SESSION['codiPostal']=$_POST['codiPostal'];

	$dia = date("d");
	$mes = date("m");
	$anyo = date("Y");
	$fecha = $anyo.'-'.$mes.'-'.$dia;
	?>
	<section class="container">
		<form action="paginaConfirmacion.php" method="post">
			<div class="form-group">
				<label for="nombreTarjeta">Nombre tarjeta</label>
				<input type="text" class="form-control" id="nombreTarjeta" aria-describedby="nombreTarjeta" name="nombreTarjeta" required>
			</div>
			<div class="form-group">
				<label for="numeroTarjeta">Número tarjeta</label>
				<input type="number" class="form-control" id="numeroTarjeta" aria-describedby="numeroTarjeta" name="numeroTarjeta" pattern="\d{5}" required>
			</div>
			<div class="form-group">
				<label for="fechaCaducidad">Fecha caducidad</label>
				<input type="date" class="form-control" id="fechaCaducidad" name="fechaCaducidad" min="<?php echo $fechaCaducidad; ?>" max="2021-12-31" required>
			</div>
			<div class="form-group">
				<label for="cvv">cvv</label>
				<input type="number" class="form-control" id="cvv" aria-describedby="cvv" name="cvv" pattern="\d{3}" required>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</section>
</body>
</html>