<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section class="container">
		<form action="inicio.php" method="post">
			<div class="form-group">
				<label for="login">User</label>
				<input type="text" class="form-control" id="login" aria-describedby="login" name="login" required>
			</div>
			<div class="form-group">
				<label for="password">password</label>
				<input type="password" class="form-control" id="password" aria-describedby="password" name="password" required>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</section>
</body>
</html>
