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

		$_SESSION['contador']++;
		$mensaje="";
		if ($_SESSION['contador']==1){
			$mensaje ='Ha visitado '.$_SESSION['contador'].' vez esta página';
		}else{
			$mensaje ='Ha visitado '.$_SESSION['contador'].' veces esta página';
		}
	?>
	<section class="container">
		<p style="font-family: <?php echo $_POST['tipoLetra']; ?>; font-size: <?php echo $_POST['medida']; ?>; color: <?php echo $_POST['color']; ?>;"><?php echo $mensaje; ?></p>
		<a class="btn btn-primary" href="./index.php" role="button">Volver</a>
	</section>
</body>
</html>