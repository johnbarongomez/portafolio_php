<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Registro</title>
</head>
<body>
<div class="container">
	<div class="alert alert-success">
		<strong>Atencion</strong>en este espacio se registra su nombre de usuario, email y contraseña
<?php 
$db="mooc";
$username="root";
$host="localhost";
$password="123456789";

$con=mysqli_connect("$host","$username","$password","$db");

if (mysqli_connect_errno()) {
	echo "failed to conect to mysql: ".mysqli_connect_error();
	
}

date_default_timezone_set("America/Bogota");
if(isset($_REQUEST['user'])){
	$user=stripslashes($_REQUEST['user']);//elimina barras invertidas
	$user=mysqli_real_escape_string($con,$user);
	$id=stripslashes($_REQUEST['id']);
	$id=mysqli_real_escape_string($con,$id);
	$pass=stripslashes($_REQUEST['pass']);
	$pass=mysqli_real_escape_string($con,$pass);
	$t=2;

	$query="INSERT into users(id,user,pass,tipo)
VALUES ('$id','$user','".md5($pass)."','$t')";//md5 encripta la contraseña
	$result=mysqli_query($con,$query);
	if($result){
		echo"<div class='form'>
<h3>su regisrtro fue realizado satisfactoriamente.</h3>
<br/>click here to <a href='login.php>Login</a></div>'";
	}
}else{

}
?>
<div class="form">
	<h1>Registro</h1>
	<form class=form-inline" name="registration" action=" " method="post">
		<input type="text" class="form-control" name="id"placeholder="id" required/>
		<input type="text" class="form-control" name="user"placeholder="Username" required/>
		<input type="text" class="form-control" name="pass"placeholder="Password" required/>
		<input type="submit" class="btn btn-succes" name="submit" value="Register" required/>
	</form>	
</div>
<?php}?>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>