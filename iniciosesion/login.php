<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <title>index</title>
  </head>
<body>

<?php
	include_once 'database.php';
	session_start();
	if (isset($_GET['cerrar_sesion'])) {
		session_unset();
		session_destroy();
}

if (isset($_SESSION['rol'])) {
			switch($_SESSION['rol']) {
				case 1:
					header('location: admin.php');

				break;
				case 2:
						header('location: cliente.php');

				break;
				case 3:
					header('location: proveedor.php');

				break;
				default:
			
	}
	
}
if (isset($_POST['username']) && isset($_POST['password'])) {
 		$username = $_POST['username'];
 		$password2 = $_POST['password'];
 		$password = md5($password2);//encriotacion de contraseña
 		$db =new Database();
 		$query = $db->connect()->prepare('SELECT *FROM users WHERE user = :username AND pass = :password');
 		$query->execute(['username' => $username,'password' =>$password]);
 		$row =$query->fetch(PDO::FETCH_NUM);

 		if ($row == true) {
 			$rol = $row[3];//asignasion de rol en la columna 3 de la db
 			$_SESSION['rol'] = $rol;
 			switch($rol){
 				case 1:
 					header('location: admin.php');
 				break;
 				case 2:
 					header('location: cliente.php');
 				break;
 				case 3:
 					header('location:proveedor.php');
 				
 				break;
 				default:		
 			}
 		}else{
 			echo "nombre de usuario o contraseña incorrecto";
 		}
 	}

 ?>	


<div class="container">
    <h2>iniciar de sesion</h2>
    <br>
    <form class="form-horizontal" action="#"  method="POST">
		
			
				User name:<br/><input class="form-control" type="text" name="username" style="width:200px"><br/>
				Password:<br/><input class="form-control" type="password" name="password" style="width:200px"><br/>
				
				<input type="submit" value="iniciar sesion" class="btn btn-succes">
			
	</form>
	<br>

<a class="btn btn-primary" href="registration.php" role="button">Registrese aqui</a>
 </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>