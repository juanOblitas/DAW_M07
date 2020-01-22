<?php
// Start the session
session_start();
$_SESSION['contador'];
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
		$tipoLetra = array("auto", "cursive", "fantasy", "inherit", "initial");
		$medida = array(
    		'grande' => '20px',
    		'mediano' => '16px',
    		'pequeño' => '12px'
		);
		
	?>
	<section class="container">
		<form action="contadorVisitas.php" method="post">
			<div class="form-group">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="input-group-text" for="tipoLetra">Options</label>
					</div>
					<select class="custom-select" id="tipoLetra" name="tipoLetra">
						<option selected>Choose...</option>
						<?php
						foreach ($tipoLetra as $key => $value) {
							?>
							<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
							<?php
						}
						?>

					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="input-group-text" for="medida">Options</label>
					</div>
					<select class="custom-select" id="medida" name="medida">
						<option selected>Choose...</option>
						<?php
						foreach ($medida as $key => $value) {
							?>
							<option value="<?php echo $value; ?>"><?php echo $key; ?></option>
							<?php
						}
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="color">Select your favorite color:</label>
				<input type="color" class="form-control" name="color" value="#ff0000" id="color"><br><br>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</section>
</body>
</html>