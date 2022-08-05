<?php
require ('config.php');

$i = $_POST['id'];
$n = $_POST['nombre'];
$a = $_POST['apellido'];
$e = $_POST['email'];

$sql = "INSERT INTO usuario (identificacion,nombre,apellido,email)
VALUES ('$i','$n','$a','$e')";

if (mysqli_query($conn,$sql)) {
	echo "datos grabados satisfactoriamente";
} else {
	echo "error" . $sql ."<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>