<?php 
require('config.php');

//sql create tabla
$sql = "CREATE TABLE usuario (
identificacion INT(30)PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
apellido VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn,$sql)) {
	echo "tabla usuarios creada satisfactoriamente";
} else {
	echo "error creado tabla:" . mysqli_error($conn);
}
mysqli_close($conn);
?>