<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>validacion formulario</title>
</head> 
<body>

<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$email = $_POST['email'];

if (trim($nombre) == '') {
	echo ("Error: por favor escriba un nombre correcto");

} else {
	echo ("su nombre es $nombre es correcto");
}
?>

<br><br>
<?php
if (filter_var($edad, FILTER_VALIDATE_INT)) {
	echo ("su edad es $edad");
} else {
	echo ("Error: por favor digite su edad");
}
?>
<br><br>
<?php
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo ("su email es: $email");
} else {
	echo ("Error: por favor digite un email valido");
}
?>

<br><br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>