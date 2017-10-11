<?php 
session_start();
$usuario = $_POST['name'];
$password = $_POST['pass'];
$conexion = True;
$var_value = $usuario;
if ($conexion == True) {
	# code...
	header("Location:http://localhost/banca/dashboard/");
	$_SESSION['varname'] = $var_value;
}
 ?>