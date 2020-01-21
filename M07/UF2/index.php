<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesiones</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
	$tipoLetra = array("auto", "cursive", "fantasy", "inherit", "initial");
		$medida = = array(
    		"grande" => 20,
    		"mediano" => 16,
    		"pequeño" => 12
		);
		
	?>
	<section class="container">
		<form action="sesions.php" method="post">
			<div class="form-group">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="input-group-text" for="tipoLetra">Options</label>
					</div>
					<select class="custom-select" id="tipoLetra" name="pais">
						<option selected>Choose...</option>
						<?php
						foreach ($tipoLetra as $key => $value) {
							?>
							<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
							<?php
						}
						?>

					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="color">Select your favorite color:</label>
				<input type="color" class="form-control" name="favcolor" value="#ff0000" id="color"><br><br>
			</div>
			
			<div class="form-group">
				<label for="titulo">Titulo</label>
				<input type="text" class="form-control" id="titulo" aria-describedby="titulo" name="titulo" required>
			</div>

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