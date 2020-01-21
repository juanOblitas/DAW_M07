<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Canciones</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
	$generosMusicales = array("rock", "pop", "baladas", "salsa", "bachata", "merengue");
	$paises = array("Perú", "España", "Brasil", "Colombia", "Argentina", "Paraguay", "Honduras", "Italia", "Francia");
	?>
	<section class="container">
		<form action="canciones.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="titulo">Titulo</label>
				<input type="text" class="form-control" id="titulo" aria-describedby="titulo" name="titulo" required>
			</div>
			<div class="form-group">
				<label for="grupo">Grupo o autor</label>
				<input type="text" class="form-control" id="grupo" name="grupo" required>
			</div>
			<div class="form-group">
				<label for="tituloDisco">Titulo del disco</label>
				<input type="text" class="form-control" id="tituloDisco" name="tituloDisco" required>
			</div>
			<!--
			<div class="form-group">
				<label for="fecha">Año</label>
				<input type="date" class="form-control" id="fecha" name="fecha" min="1970-01-01" max="2019-12-31" required>
			</div>
		-->
			<div class="form-group">
				<label for="anyo">Año</label>
				<input type="number" class="form-control" id="anyo" name="anyo" min="1970" max="2019" required>
			</div>
			<div class="form-group">
				<label for="genero">Elija el genero musical</label>
				<?php
				foreach ($generosMusicales as $key => $value) {
					?>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="genero" value="<?php echo $value; ?>">
						<label class="form-check-label"><?php echo $value; ?></label>
					</div>
					<?php
				}
				?>
			</div>
			<div class="form-group">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="input-group-text" for="genero">Options</label>
					</div>
					<select class="custom-select" id="genero" name="pais">
						<option selected>Choose...</option>
						<?php
						foreach ($paises as $key => $value) {
							?>
							<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
							<?php
						}
						?>

					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="imagen">Foto portada disco</label>
				<input type="file" class="form-control" id="imagen" name="imagen" required>
			</div>
			<div class="form-group">
				<label for="audio">Fichero audio</label>
				<input type="file" class="form-control" id="audio" name="audio" required>
			</div>
			<div class="form-group">
				<label for="letra">Letra de la canción</label>
				<textarea type="text" rows="4" cols="100" id="letra" name="letra"></textarea>
			</div>
			<div class="form-group">
				<input type="checkbox" value="1" id="visible" name="isVisible">
				<label class="form-check-label" for="visible">
					Hacerlo Visible(Si o No)
				</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</section>
	
</body>
</html>