<?php

session_start();
include 'conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		$_SESSION['username'] = $username;
		header("Location: ventas.php");
		exit();
		} else {
			echo "Nombre de usuario o contraseña incorrectos";
	}
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <link href="inicio.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
    <title>Login</title>
</head>
<body>

<div class="caja">
	<h2>Iniciar Sesion</h2>
<form method="post" action="login.php">
  <label>Usuario:</label><br>
    <input type="text" name="username" required>
    <br>
  <label>Contraseña:</label><br>
    
    <input type="password" name="password" required>
    <br>
    <br>
  
    <div class="contentBox">
   	 <div id="sixth" class="buttonBox">
    <button type="submit">Ingresar</button>
    <div class="border"></div>
    <div class="border"></div>
    <div class="border"></div>
    <div class="border"></div>
  	</div>
    </div>
    
 	
    
    
    
  </form>
  </div>
</body>
</html>