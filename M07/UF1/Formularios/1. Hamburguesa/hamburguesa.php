<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hamburguesa</title>
</head>
<body>
	<form action="hamburguesa.php" method="post">
		<input type="checkbox" name="Formatge" value="0,5">Formatge, 0,50€<br>
		<input type="checkbox" name="Bacon" value="0,75">Bacon, 0,75€<br>
		<input type="checkbox" name="ExtraCeba" value="0,25">Extra ceba, 0,25€<br>
		<input type="checkbox" name="SalsaTartara" value="0,25">Salsa tartara, 0,25€<br>
		<input type="checkbox" name="Ou" value="0,40">Ou. 0,40€<br>
		<input type="checkbox" name="CogombresPetits" value="0,30">Cogombres petits, 0,30€<br>
		<input type="checkbox" name="HamburguesaExtra" value="0,90">Hamburguesa extra, 0,90€<br>
		<input type="checkbox" name="Ketchup" value="0,20">Ketchup, 0,20€<br>
		<input type="checkbox" name="Mostassa" value="0,20">Mostassa, 0,20€<br>
		<input type="submit" value="Submit">
	</form>
	<?php 
		$total = 1;
		$array = array(
		    "Formatge" => 0.5,
		    "Bacon" => 0.75,
		    "ExtraCeba" => 0.25,
		    "SalsaTartara" => 0.25,
		    "Ou" => 0.40,
		    "CogombresPetits" => 0.30,
		    "HamburguesaExtra" => 0.90,
		    "Ketchup" => 0.20,
		    "Mostassa" => 0.20
		);
		foreach ($array as $key => $value) {
			if(isset($_POST[$key])){
				/*echo $_POST[$key]."<br>";*/
				$total += $value;
				
			}
			
		}
		echo $total;

	?>
</body>
</html>