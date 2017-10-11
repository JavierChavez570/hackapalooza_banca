<?php 
$conexion = mysql_connect('localhost','root','') or die('No existe una correcta conexion a la base de datos');
$db = mysql_select_db('banca_hack',$conexion) or die('No existe la base de datos');
 ?>