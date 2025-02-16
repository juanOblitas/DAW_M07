<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
	require_once "../Negocio/Usuario.php";
	/*$user2=new Usuario(null,'Liz','dominguez','comprador');
	$user2->Insertar();*/
	$user=new Usuario();
	if(isset($_POST['login']) && isset($_POST['password'])){

		
		$user->setLogin($_POST['login']);
		$user->setPassword($_POST['password']);
		$isUser = $user->isUser();
		
		if($isUser){
			$showRol=$user->showRol();
			$user->setRol($showRol);
			echo "El usuario ".$user->getLogin()." tiene el rol ".$showRol;
		}else{
			echo "no eres usuario";
		}
	}

	$seccion = array('zapato' => 'zapato', 
					'pantalones' => 'pantalones',
					'correa' => 'correa');
?>
	<h1>Añadir productos</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="nombre">Nombre Producto</label>
			<input type="text" class="form-control" id="nombre" aria-describedby="nombre" name="nombre" required>
		</div>
		<div class="form-group">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<label class="input-group-text" for="seccion">Sección</label>
				</div>
				<select class="custom-select" id="seccion" name="seccion">
					<option selected>Choose...</option>
					<?php
					foreach ($seccion as $key => $value) {
						?>
						<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
						<?php
					}
					?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="descripcion">Descripción</label>
			<textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
		</div>
		<div class="form-group">
			<label for="precio">precio</label>
			<input type="number" class="form-control" id="precio" name="precio" required>
		</div>
		<div class="form-group">
			<label for="imagen">Subir imagen</label>
			<input type="file" class="form-control" id="imagen" name="imagen" required>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	<?php 
		$mensaje="";
		if(isset($_POST['nombre']) && isset($_POST['seccion']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['precio'])){
			if($user->getRol() == 'administrador'){
				//Insertamos los datos en una DB
				require_once "../Negocio/Producto.php";
				$producto=new Producto(null,$_POST['nombre'], $_POST['seccion'],$_POST['descripcion'],$_POST['precio'],null);
				
				$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/DAW/M07/UF2/8. Agregar productos/Presentacion/productos/';
				$nombre_imagen = $_FILES['imagen']['name'];
				move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);
				$producto->setUrl('./productos/'.$nombre_imagen);
				$producto->Insertar();


			}else{
				$mensaje ="No dispone de suficientes permisos";
			}
		}
		echo $mensaje;
	?>
</body>
</html>

