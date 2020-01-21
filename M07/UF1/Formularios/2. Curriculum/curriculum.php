<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curriculum</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<?php 
		$nombre_fichero=$_FILES['fichero']['name'];
		$tipo_fichero=$_FILES['fichero']['type'];
		$tamanyo_fichero=$_FILES['fichero']['size'];
		//Ruta de la carpeta destino en el servidor
		$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/DAW/M07/UF1/Formularios/2. Curriculum/curriculum/';
		//Movemos la imagen del directorio temporal
		move_uploaded_file($_FILES['fichero']['tmp_name'], $carpeta_destino.$nombre_fichero);

		echo "Se ha recibido el CV de ".$_POST['nombre']." ".$_POST['apellidos']." con DNI ".$_POST['dni']." en el fichero ".$nombre_fichero;
	?>
</body>
</html>