<?php

session_start();

$admin=$_POST['admin'];
$clave=$_POST['clave'];

include ("../conexion.php");

$consulta= $conexion->query("SELECT * FROM usuarios WHERE admin='$admin' AND clave='$clave'");

if ($resultado= mysqli_fetch_array($consulta)){
	$_SESSION["admin"] = $resultado['admin']; 
	echo 'Iniciando sesión para '.$_SESSION['admin'].' <p>';
    echo '<script> window.location="../bienvenido.php"; </script>';
}
else {
	echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
    echo '<script> window.location="../index.php"; </script>';
}
