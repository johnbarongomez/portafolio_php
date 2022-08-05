<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>escapado de caracteres</title>
</head>
<body>

<?php
$nombre =$email =$Gender = $comment =$website= "";

if ($_SERVER['REQUEST_METHOD']=="POST") {
	$nombre=test_input($_POST['nombre']);
	$email=test_input($_POST['email']);
	$website=test_input($_POST['website']);
	$comment=test_input($_POST['comment']);
	$Gender=test_input($_POST['Gender']);
	
}

function test_input($data){
	$data = trim($data);//elimina los espacios vacios
	$data = stripcslashes($data);//elimina barras invertidas
	$data = htmlspecialchars($data);//convierte en identidades html
	return $data;

}
?>
<div class="container">
		<form class="form-horizontal" action="escapar.php" role="form" method="post">
		<div class="input">

			<label>digite su nombre: </label>
			<input type="text" class="form-control" placeholder="ingrese un numero" name="nombre" style="width: 200px">
		</div>
			
		<div class="input">
			<label >digite su email: </label>
			<input class="form-control" type="text" placeholder="ingrese un numero" name="email" style="width:200px">
		</div>

		<div class="input">
			<label >website: </label>
			<input class="form-control" type="text" placeholder="ingrese un numero" name="website" style="width:200px">
		</div>

		<div class="input">
			<label >comment </label>
			<textarea class="form-control" type="text" placeholder="ingrese un numero" name="comment" rows="5" cols="40"></textarea>
		</div>

		Gender:

		<div class="radio">
			<input type="radio" name="Gender" value="female">Femenino
		</div>
		<div class="radio">
			<input type="radio" name="Gender" value="male">masculino
		</div>
		<div class="radio">
			<input type="radio" name="Gender" value="other">otros
		</div>
<p></p>
<p></p>

		<button type="submit" name="submit" class="btn btn-primary">Enviar</button>
	</form>

<?php
echo "<h2>Your Input:</h2>";
echo $nombre;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $Gender;
;
?>
<br><br> 
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>