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
	
	<h1>Datos generales del billete</h1>
	<section class="container">
		<h2>Especificación del vuelo</h2>
		<ul>
			<li>Origen:<?php echo $_SESSION['paisOrigen']; ?></li>
			<li>Destino:<?php echo $_SESSION['paisDestino']; ?></li>
			<li>Fecha:<?php echo $_SESSION['fecha']; ?></li>
		</ul>
	</section>
	<section class="container">
		<h2>Datos del usuario</h2>
		<ul>
			<li>nombre:<?php echo $_SESSION['nombre']; ?></li>
			<li>Destino:<?php echo $_SESSION['apellidos']; ?></li>
			<li>Fecha:<?php echo $_SESSION['dni']; ?></li>
			<li>Fecha:<?php echo $_SESSION['email']; ?></li>
			<li>Fecha:<?php echo $_SESSION['direccion']; ?></li>
			<li>Fecha:<?php echo $_SESSION['poblacion']; ?></li>
			<li>Fecha:<?php echo $_SESSION['codiPostal']; ?></li>
		</ul>
	</section>
	<section class="container">
		<h2>Datos de pago</h2>
		<ul>
			<li>nombre tarjeta:<?php echo $_POST['nombreTarjeta']; ?></li>
			<li>nombre tarjeta:<?php echo $_POST['numeroTarjeta']; ?></li>
			<li>nombre tarjeta:<?php echo $_POST['fechaCaducidad']; ?></li>
			<li>nombre tarjeta:<?php echo $_POST['cvv']; ?></li>
		</ul>
	</section>
	
	<?php
		/* Escribimos en el fichero */
		$fp = fopen("miarchivo.csv", "w");
		$texto = "Datos del usuario<br>Especificación del vuelo<br>".$_SESSION['paisOrigen'];
		fwrite($fp, $texto);
		fclose($fp);
	?>
	
</body>
</html>