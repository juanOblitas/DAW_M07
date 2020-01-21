<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curriculum</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>


	<?php 
		$nombre_fichero=$_FILES['fichero']['name'];
		$tipo_fichero=$_FILES['fichero']['type'];
		$tamanyo_fichero=$_FILES['fichero']['size'];
		//Ruta de la carpeta destino en el servidor
		$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/DAW/M07/UF1/Formularios/3. Subir un Producto/producto/';
		//Movemos la imagen del directorio temporal
		move_uploaded_file($_FILES['fichero']['tmp_name'], $carpeta_destino.$nombre_fichero);

		//Con esto podria saber la extensión de un archivo
		echo explode(".",$nombre_fichero)[1];

		/*echo "La extension de la imagen subida es: ".substr($nombre_fichero,-3);*/
	?>
		<ul>
			<li><?php echo $nombre_fichero." (".$tamanyo_fichero.")";?></li>
			<li class="nombrePrecio"><?php echo $_POST['nombre']; ?></li>
			<li><?php echo $_POST['descripcion'];?></li>
			<li class="nombrePrecio"><?php echo $_POST['precio'].' €';?></li>
		</ul>

</body>
</html>