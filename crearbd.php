<?php 
$servername= "localhost";
$username = "root";
$password = "123456789";

//create conection
$conn = mysqli_connect($servername,$username,$password);
// check connection
if (!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
//create datbase
$sql = "CREATE DATABASE mooc";
if (mysqli_query($conn,$sql)) {
	echo "base de datos creada satisfactoriamente";
} else {
	echo "error creado base de datos" . mysqli_error($conn);
}
mysqli_close($conn);
?>