<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
    <title>operaciones</title>
  </head>
  <body>
 
<?php
$tipo = $_POST['tipo'];
$a = $_POST['a'];
$b = $_POST['b'];
switch ($tipo) {
  case 'suma':
    $s=$a+$b;
    echo "la suma es ".$s." <br>";
    break;
  case 'resta':
    $r=$a-$b;
    echo "la resta es ".$r." <br>";
    break;
  case 'multiplicacion':
    $m=$a*$b;
    echo "la multiplicacion es ".$m." <br>";
    break;
  case 'division':
    $d=$a/$b;
    echo "la Division es ".$d." <br>";
    break;
  }

?>

<div>estructura if else</div>

<?php

echo "<br>"."estructura if esls"."<br>";
if ($a==$b) {
echo "el numero".$a."es igual al numero".$b."<br>";
}else{
echo"el numero".$a."es diferente con respecto a".$b"<br>";
}
if ($a>$b) {
echo "el numero" .$a."es mayor al numero".$b"<br>";
}  

if ($a<$b) {
echo "el numero" .$a."es menor al numero".$b"<br>";
}  

?>


 </body>
</html>