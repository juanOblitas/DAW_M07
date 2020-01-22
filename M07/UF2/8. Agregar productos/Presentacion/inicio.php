<?php
	require_once "../Negocio/Usuario.php";

	$$isUser =0;
	if(isset($_POST['login']) && isset($_POST['password'])){

		$user=new Usuario();
		$user->setLogin($_POST['login']);
		$user->setPassword($_POST['password']);
		$isUser = $user->isUser($user->getLogin(),$user->getPassword());
	}
	if($isUser){
		$showRol=$user->showRol();
		echo "El usuario ".$user->getLogin()." tiene el rol ".$showRol;
	}else{
		echo "no eres usuario";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregar Productos</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

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