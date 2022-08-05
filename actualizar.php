<?php
require ('config.php');

$i = $_POST['id'];
$n = $_POST['nombre'];
$a = $_POST['apellido'];
$e = $_POST['email'];

$sql = "UPDATE usuario SET nombre='$n',apellido='$a',email='$e' WHERE identificacion='$i'";


if (mysqli_query($conn,$sql)) {
	echo "datos actualizado satisfactoriamente";
} else {
	echo "error actualizados satisfactoriamente" . $sql ."<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>