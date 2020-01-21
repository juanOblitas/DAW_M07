<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curriculum</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<form action="curriculum.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" class="form-control" id="nombre" aria-describedby="nombre" name="nombre" required>
		</div>
		<div class="form-group">
			<label for="apellidos">Apellidos</label>
			<input type="text" class="form-control" id="apellidos" name="apellidos" required>
		</div>
		<div class="form-group">
			<label for="dni">Dni</label>
			<input type="text" class="form-control" id="dni" name="dni" required>
		</div>
		
		<div class="form-group">
			<label for="fichero">Fichero</label>
			<input type="file" class="form-control" id="fichero" name="fichero" required>
		</div>
		<!-- Esto no funciona, no me sube el fichero. Bootstrap 4
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="ficheroAddon">Upload</span>
			</div>
			<div class="custom-file">
				<input type="file" class="custom-file-input" id="fichero" aria-describedby="ficheroAddon" name="fichero">
				<label class="custom-file-label" for="fichero">Choose file</label>
			</div>
		</div>
		-->
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

</body>
</html>