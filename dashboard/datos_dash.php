<?php 
include('../includes/connection.php');
$v1=(isset($_POST['ingreso']))?1:0;
$v2=(isset($_POST['egresos']))?1:0;
$v3=(isset($_POST['egresos_m']))?1:0;
$v4=(isset($_POST['ingreso_m']))?1:0;
$v5=(isset($_POST['grafica']))?1:0;
$v6=(isset($_POST['hist_c']))?1:0;
$v7=(isset($_POST['hist_t']))?1:0;
$v8=(isset($_POST['promo']))?1:0;
$v9=(isset($_POST['nomi']))?1:0;

$Reportes=$v1.",".$v2.",".$v3.",".$v4.",".$v5.",".$v6.",".$v7.",".$v8.",".$v9;

$insertar = 'ingresos,egresos,ingresos_mensuales,historial_compras,promociones,recomendaciones,dictado_voz,egresos_mensuales,historial_transacciones';
$llamada = mysql_query("INSERT INTO bloques ($insertar) VALUES ($Reportes)");
if ($llamada == True) {
	echo "<h3>Wooow!! acabas de crear una idea Genial para algo Fenomenal!!!</h3>";
	echo '<meta http-equiv="Refresh" content="2;url=http://localhost/banca/dashboard/perfil.php">';
	# code...
}


 ?>