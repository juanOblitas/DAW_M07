<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
	$dia = date("d");
	$mes = date("m");
	$anyo = date("Y");
	$fecha = $anyo.'-'.$mes.'-'.$dia;
	$paises = array(
		'Afghanistan' => 'AF', 
		'Åland Islands' => 'AX',
		'Albania' => 'AL',
		'Algeria' => 'AZ',
		'American Samoa' => 'AS',
		'Andorra' => 'AD',
		'Angola' => 'AO',
		'Anguilla' => 'AI',
		'Antarctica' => 'AQ',
		'Antigua and Barbuda' => 'AG'
	);
	?>
	<section class="container">
		<form action="datosUsuario.php" method="post">
			<div class="form-group">
				<label for="paisOrigen">Elija pais origen</label>
				<select class="form-control" id="paisOrigen" name="paisOrigen">
					<?php
				foreach ($paises as $key => $value) {
					?>
					<option value="<?php echo $key.'('.$value.')'; ?>"><?php echo $key; ?></option>
					<?php
				}
				?>
				</select>
			</div>
			<div class="form-group">
				<label for="paisDestino">Elija pais destino</label>
				<select class="form-control" id="paisDestino" name="paisDestino">
					<?php
				foreach ($paises as $key => $value) {
					?>
					<option value="<?php echo $key.'('.$value.')'; ?>"><?php echo $key; ?></option>
					<?php
				}
				?>
				</select>
			</div>
			<div class="form-group">
				<label for="fecha">Fecha viaje</label>
				<input type="date" class="form-control" id="fecha" name="fecha" min="<?php echo $fecha; ?>" max="2021-12-31" required>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</section>
</body>
</html>