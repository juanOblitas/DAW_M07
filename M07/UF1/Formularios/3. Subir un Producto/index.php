<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curriculum</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<form action="producto.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" id="nombre" aria-describedby="nombre" name="nombre" required>
		</div>
		<div class="form-group">
			<label for="descripcion">Descripcion</label>
			<input type="text" class="form-control" id="descripcion" name="descripcion" required>
		</div>
		<div class="form-group">
			<label for="precio">precio</label>
			<input type="text" class="form-control" id="precio" name="precio" required>
		</div>
		
		<div class="form-group">
			<label for="fichero">Fichero</label>
			<input type="file" class="form-control" id="fichero" name="fichero" required>
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

</body>
</html>