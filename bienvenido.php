<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['admin'])) {?>

<!DOCTYPE html>
<html>
<head>
<title>Bienvenido</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="timer Sign In Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>


<h1>Bienvenido <?php echo ucfirst($_SESSION['admin']); ?></h1>
<h1><a href="action/cerrar-sesion.php">Cerrar sesion </a></h1>

</body>
</html>
<?php
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>
