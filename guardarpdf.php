<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>reporte</title>
</head>
<body>

<div class="container">
<form class="form-horizontal" action="guardaruser.php" role="form" method="post">
		<div class="input">

			<label>Nombre: </label>
			<input type="text" class="form-control" placeholder="ingrese un nombre" name="nombre" style="width:200px">
		</div>
			
			<div class="input">
				<label for="Codigo" >Codigo: </label>
				<input class="form-control" type="text" placeholder="ingrese un codigo" name="codigo" style="width:200px">
			</div>
			<div class="input">
				<label for="Area">Area: </label>
				<input class="form-control" type="text" placeholder="ingrese el area" name="area" style="width:200px">
			</div>
			<div class="input">
				<label for="fecha">Fecha: </label>
				<input class="form-control" type="date" placeholder="ingrese la fecha de ingreso" name="fecha" style="width:200px">
			</div>
<p></p>
<p></p>

		<button type="submit" name="submit" class="btn btn-danger">Guardar reporte en txt</button>
</form>

<form class="form-horizontal" action="guardarpdf.php" role="form" method="post">
		<div class="input">

			<label>Nombre: </label>
			<input type="text" class="form-control" placeholder="ingrese un nombre" name="nombre" style="width:200px">
		</div>
			
			<div class="input">
				<label for="Codigo" >Codigo: </label>
				<input class="form-control" type="text" placeholder="ingrese un codigo" name="codigo" style="width:200px">
			</div>
			<div class="input">
				<label for="Area">Area: </label>
				<input class="form-control" type="text" placeholder="ingrese el area" name="area" style="width:200px">
			</div>
			<div class="input">
				<label for="fecha">Fecha: </label>
				<input class="form-control" type="date" placeholder="ingrese la fecha de ingreso" name="fecha" style="width:200px">
			</div>
<p></p>
<p></p>

		<button type="submit" name="submit" class="btn btn-danger">Guardar reporte en pdf</button>
</form>
</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>


<?php
$html=ob_get_clean();
//echo $html;

require_once '..\libreria\dompdf\autoload.inc.php';
use Dompdf\Dompdf;
$dompdf =new Dompdf();

$options =$dompdf->getOptions();
$options->ser(array('isRemoteEnabled'=> true));
$dompdf->serOptions($options);

$dompdf->loadHtml("hola developer");
$dompdf->setPaper('letter');
//$dompdf->setPoper('A4','Lanscope');

$dompdf->render();
$dompdf->stream("archivo.pdf",array("attachment"=>false));//false para que se abra en navegador, true para descargar
?>