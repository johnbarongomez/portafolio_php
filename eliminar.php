<?php

require('config.php');

$id = $_POST['id'];

$sql ="DELETE FROM usuario WHERE identificacion=$id";


if(mysqli_query($conn , $sql)){
	echo "registro eliminado";
}else{
	echo "Error eliminado registro" .mysqli_error($conn);
}

mysql_close($conn);
?>