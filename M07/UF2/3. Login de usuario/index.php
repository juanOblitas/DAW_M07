<?php
// Start the session
session_start();

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
		$mensaje="";
		if($_POST['usuario']=='admin' && $_POST['password']=='phpisgood'){
			$_SESSION['usuario']=True;
			$mensaje = "Bienvenido administrador";
		}else{
			$mensaje = "Usuario no identificado";
		}
		
	?>

	<section class="container">

		<p><?php echo $mensaje; ?></p>
		<form action="login.php" method="post">
			<button type="submit" class="btn btn-secondary" name="logout">Logout</button>
		</form>
		
	</section>
</body>
</html>