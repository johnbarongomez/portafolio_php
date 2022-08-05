<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">  
	<title>estructuras iterativas</title>

</head>
<body>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
?>

<div class="container">
	<h1>estructuras de control:iterativas,repetitivas(ciclos o bucles)</h1>
	<br>

<?php
echo "<b>"."estructura FOR"."</b>"."<br>";
for ($a=$a; $a<= $b ; $a++) {
	echo "el numero es ".$a."<br>";
}
?>

<br><br>

<?php
echo "<b>"."estructura WHILE"."</b>"."<br>";
$x=$_POST['a'];
$y=$_POST['b'];

while ($x<=$y) {
	echo "El numero es ".$x."<br>";
	$x++;

}
?>
<?php
echo "<b>"."estructura DO WHILE"."</b>"."<br>";
$z=$_POST['a'];
$w=$_POST['b'];

do  {
	echo "El numero es ".$z."<br>";
	$z++;

} while ($z <=$w);
?>

<?php
echo "<b>"."estructura FOREACH"."</b>"."<br>";
$carros = array("toyota", "mercedes", "audi","volvo");

foreach ($carros as $value) {
	echo "$value <br>";
}

?>

<br> <br>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>