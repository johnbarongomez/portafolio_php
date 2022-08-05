<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
	<title>arreglos</title>


</head>
<body>
<div class="container">
	<h1>Arreglos</h1>
</div>

<?php
echo "<b>"."estructura FOREACH"."</b>"."<br>";
$carros = array("toyota", "mercedes", "audi","volvo");

foreach ($carros as $value) {
	echo "$value <br>";
}

echo "<b>"."estructura indexado por print_r"."</b>"."<br>";
$carros = array("toyota", "mercedes", "audi","volvo");
print_r($carros);
echo "<br>";

echo "<b>"."arreglo asociativo"."</b>"."<br>";
$peso = array("Camilo"=>"80", "Fernando"=>"75","mercedes"=>"77");
foreach ($peso as $x => $x_valor) {
	echo "llave=".$x.",valor=".$x_valor;
	echo "<br>";
	
}

echo "<b>"."arreglo multidimensionales"."</b>"."<br>";
$carros = array(
	array("mitsubishi",2700,400),
	array("toyota",2700,400),
	array("chevrolet",2700,400),
	array("renault",2700,400)
);

for ($fila=0; $fila < 4; $fila++) { 
	echo "<p><b>fila numero $fila</b></p>";
	echo "<ul>";
	for ($columna=0; $columna < 3; $columna++) { 
		 echo "<li>".$carros[$fila][$columna]."</li>";
	}
	echo "</ul>";

}

echo $carros[0][0].": cilindraje:".$carros[0][1].",par NM:".$carros[0][2].".<br>";
echo $carros[1][0].": cilindraje:".$carros[1][1].",par NM:".$carros[1][2].".<br>";
echo $carros[3][0].": cilindraje:".$carros[2][1].",par NM:".$carros[2][2].".<br>";
echo $carros[0][0].": cilindraje:".$carros[3][1].",par NM:".$carros[3][2].".<br> <br>";

echo "<br>"."<b>"."ordenar arreglos"."</b>"."<br>";

echo "<br>"."<b>"."sort() orden ascendente"."</b>"."<br>";

$peso = array("Camilo"=>"80", "Fernando"=>"75","mercedes"=>"77");
sort($peso);
foreach ($peso as $x => $x_valor) {
	echo "llave=".$x.",valor=".$x_valor;
	echo "<br>";
}
echo "<br>"."<b>"."rsort() orden descendente"."</b>"."<br>";

$peso = array("Camilo"=>"80", "Fernando"=>"75","mercedes"=>"77");
rsort($peso);
foreach ($peso as $x => $x_valor) {
	echo "llave=".$x.",valor=".$x_valor;
	echo "<br>";
}

echo "<br>"."<b>"."array diff comparacion de arreglos"."</b>"."<br>";

$colores = array("a"=>"amarillo", "azul","negro","blanco");
$colores1 = array("b"=>"amarillo", "blanco","azul");
$resultado =array_diff($colores,$colores1);

print_r($resultado);
echo "<br>";

echo "<br>"."<b>"."array_unshift agregando elementos al inicio de arreglos"."</b>"."<br>";

$jugo= array('fresa',"kiwi" );
array_unshift($jugo,"manzana","naranja");
print_r($jugo);
echo"<br>";

echo "<br>"."<b>"."array_push agregando elementos al final de arreglos"."</b>"."<br>";

$jugo= array('fresa',"kiwi" );
array_push($jugo,"manzana","naranja");
print_r($jugo);
echo"<br>";
?>

<sript src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>