<?php
	session_start();
	include 'conexion.php';
	if(isset($_SESSION['admin'])){
	header("Location: bienvenido.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
	<div class="app-timer">
		<div class="timer"><img src="images/timer.png" class="img-responsive" alt="" /></div>
			<form method="post" action="action/login.php">
				<ul>
					<li>
				 <a href="#" class=" icon email"></a>
				 <input type="text" class="text" placeholder="Usuario" name="admin">
				 </li>
					<li>
						<a href="#" class=" icon lock"></a>
						<input type="password" placeholder="Contraseña" name="clave">
					</li>
					<div class="clear"></div>

					<div class="submit"><input type="submit" value="Iniciar Sesión" ></div>
					<div class="clear"></div>
				</ul>
			</form>
	</div>
</body>
</html>
