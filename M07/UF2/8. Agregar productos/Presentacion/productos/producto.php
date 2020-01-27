<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	require_once "../Negocio/Usuario.php";
	/*$user2=new Usuario(null,'Liz','dominguez','comprador');
	$user2->Insertar();*/

	if(isset($_POST['login']) && isset($_POST['password'])){

		$user=new Usuario();
		$user->setLogin($_POST['login']);
		$user->setPassword($_POST['password']);
		$isUser = $user->isUser();
		
		if($isUser){
			$showRol=$user->showRol();
			
			echo "El usuario ".$user->getLogin()." tiene el rol ".$showRol;
		}else{
			echo "no eres usuario";
		}
	}

	$seccion = array('zapato' => 'zapato', 
					'pantalones' => 'pantalones',
					'correa' => 'correa');
?>
	<form action="producto.php" method="post" enctype="multipart/form-data">
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
</body>
</html>

