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
		$genero = $_POST['genero'];
		$autor = $_POST['grupo'];
		$titulo = $_POST['titulo'];
		$pais = $_POST['pais'];
		$tituloDisco = $_POST['tituloDisco'];
		$anyo = $_POST['anyo'];
		$letra = $_POST['letra'];

		/* Los checkbox no sirven para imprimir */
		/*
		if( !isset($_POST['isVisible']) || !$_POST['isVisible'] ) { 
			echo "No has sido checkeado";
		}else if($_POST['isVisible']){
			echo "Has sido checkeado";
		}*/

		mkdir("./canciones/".$genero);

		/* Datos de la imagen */
		$nombre_imagen = $_FILES['imagen']['name'];
		$tipo_imagen = $_FILES['imagen']['type'];
		$tamanyo_imagen = $_FILES['imagen']['size'];
		//Ruta de la carpeta destino en el servidor
		$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/DAW/M07/UF1/Formularios/4. Subir Canciones/canciones/'.$genero."/";
		//Movemos la imagen del directorio temporal
		//.$autor."_".$titulo
		$extensionImagen = explode(".",$nombre_imagen)[1];
		$renombrarImagen = $autor."_".$titulo.".".$extensionImagen;
		move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$renombrarImagen);

		/* Datos del audio */
		$nombre_audio = $_FILES['audio']['name'];
		$tipo_audio = $_FILES['audio']['type'];
		$tamanyo_audio = $_FILES['audio']['size'];

		mkdir("./canciones/".$pais);

		//Ruta de la carpeta destino en el servidor
		$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/DAW/M07/UF1/Formularios/4. Subir Canciones/canciones/'.$pais."/";
		$extensionAudio = explode(".",$nombre_audio)[1];
		$tituloNotBlank = explode(" ",$titulo);
		$nuevoTitulo="";
		foreach ($tituloNotBlank as $key => $value) {
			$nuevoTitulo.=$value;
		}
		$renombrarAudio = $autor."_".$nuevoTitulo.".".$extensionAudio;

		//Movemos el audio del directorio temporal
		move_uploaded_file($_FILES['audio']['tmp_name'], $carpeta_destino.$renombrarAudio);

	?>

	<section class="container">
		<div class="d-flex">
			<div class="col-9">
				<img src="<?php echo './canciones/'.$genero.'/'.$renombrarImagen; ?>" class="img-fluid" alt="">
			</div>
			<div class="col-3">
				<ul class="list-group">
					<li class="list-group-item"><?php echo $titulo; ?></li>
					<li class="list-group-item"><?php echo $autor; ?></li>
					<li class="list-group-item"><?php echo $tituloDisco; ?></li>
					<li class="list-group-item"><?php echo $anyo; ?></li>
					<li class="list-group-item"><?php echo $genero; ?></li>
					<li class="list-group-item"><?php echo $pais; ?></li>
					<li class="list-group-item"><?php echo $letra; ?></li>
					<?php 
							if(!(!isset($_POST['isVisible']) || !$_POST['isVisible'])){
						?>
					<li class="list-group-item">
						<a href="./canciones/<?php echo $genero.'/'.$renombrarImagen;?>">Imagen</a>
					</li>
					<?php } ?>
					<li class="list-group-item"><?php echo $titulo; ?></li>
				</ul>
			</div>
		</div>
	</section>
		
</body>
</html>