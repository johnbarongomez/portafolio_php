<?php

require('config.php');

$id = $_POST['id'];

$sql ="SELECT identificacion, nombre, apellido , email FROM usuario WHERE identificacion=$id";
$result =mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "id:" .$row["identificacion"] ."<br>"."Nombre: " .$row["nombre"] ."<br>"."Apellido: " .$row["apellido"] ."<br>"."Email: " .$row["email"] ."<br>";

		// code...
	}
}else{
	echo "no existe el registro con el id,<a href='insertar_datos.html'>insete un registro</a>";
}

mysql_close($conn);
?>