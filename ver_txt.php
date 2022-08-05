<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>ver  usuario</title>
</head>
<body>

<div class="container">
	<h2>usuarios</h2>
	<p>el usuariio asociado al codigo digitado es:</p>
</div>
<?php


$codigo = $_POST['codigo'];
$fp = fopen("$codigo.txt","r");
while (!feof($fp)) 
{
$linea = fgets($fp);
?>

<div class="container">
	<table class="table">
		<thead>
		</thead>
			<tbody>
				<tr><td><?php echo $linea . "<br/>";?></td></tr>
			</tbody>
		
	</table>
</div>
<?php
}
?>
<?php
fclose($fp); 
?>

<div class="container">
	<p class="bg-primary">El archivo ha sido leido con exito</p>
</div>
<br>
<br>
<div class="container">
	<a href="index.html" align class="btn btn info" role="button">Volver</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>