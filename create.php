<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>crear cookie</title>
</head>
<body>
<?php
$cookie_name = "usuario";
$cookie_value = "John Baron";
setcookie($cookie_name,$cookie_value,time()+(3600),"/");//tiempo den segundos
if (!isset($_COOKIE[$cookie_name])) {
echo "la coockie llamada '".$cookie_name."' no esta configurada";
}else{
echo "la coockie '".$cookie_name."' esta configurada<br>";
echo "su valor es: ". $_COOKIE[$cookie_name];
}
?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>