<?php
// Start the session
session_start();
$_SESSION['usuario']=False;
?>
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
	$nombreUsuario = 'admin';
	$password = 'phpisgood'; 

	?>
	<section class="container">
		<form action="index.php" method="post">
			<div class="form-group">
				<label for="usuario">Nombre usuario</label>
				<input type="text" class="form-control" id="usuario" aria-describedby="emailHelp" name="usuario">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" name="password">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</section>
</body>
</html>