<?php //proteccion de usuario determina que usuario va a ingresar se agreaga en todo formulario php para evitar ataques al codigo analisis de vulnerabilidades.
	session_start();

	if(!isset($_SESSION['rol'])){
		header('location:login.php');

	}else {
		if ($_SESSION['rol']!=1) {
			header('location:login.php');
		}
	}                                               

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrador</title>
</head>
<body>
<div class="container">
	<h2>Modulo de administrador</h2>
	<p>Bienvenidos</p>
	<div class="alert alert-sucess">
		<strong>hola</strong> este es el modulo <a href"#" class="alert-link">exclusico papra administrador</a>
	</div>
	<a class="btn btn-primary" href="logout.php" role="button">Cerrar sesion</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>