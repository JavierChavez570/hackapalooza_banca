<?php include('a_header.php'); 
include('../includes/connection.php');?>
      	<!--promocionales_eventuales-->

              
          
        <!-- Módulos de muestra configurables ingresos y egresos, generales-->
<?php  
  $rs = mysql_query("SELECT ingresos,egresos,ingresos_mensuales,historial_compras,promociones,recomendaciones,dictado_voz,egresos_mensuales,historial_transacciones FROM bloques");
if ($row = mysql_fetch_row($rs)) {
$ing = trim($row[0]);
$egresos = trim($row[1]);
$egresos_mensuales = trim($row[2]);
$grafica = trim($row[3]);
$historial_compras = trim($row[4]);
$historial_transacciones = trim($row[5]);
$ingresos = trim($row[6]);
$nomina = trim($row[7]);
$promociones = trim($row[8]);
}
?>

<?php 
if ($ing <= 1) {
  //1
  include('modulos/ingresos.php');
}else{echo "hooollla";}
if ($egresos <= 1) {
  //2
  include('modulos/egresos.php');
}
if ($egresos_mensuales <= 1) {
  //3
  include('modulos/egresos_mensuales.php');
}
if ($ingresos <= 1) {
  //4
  include('modulos/ingresos.php');
}
if ($promociones <= 1) {
  //5
  include('modulos/promociones.php');
}

 
?>




       
       

      
      </div>
      <div class="row">
                 
          <!--ingreso de instorial y de graficas de ganancia-->
          <?php 
          if ($historial_compras = 1) {
            //6
  include('modulos/historial_compras.php');
}
if ($historial_transacciones = 1) {
  //7
  include('modulos/historial_transacciones.php');
}
            if ($grafica = 1) {
              //8
  include('modulos/grafica_ganancias.php');
}
           ?>
         </div>
        <div class="col-sm-offset-1 col-sm-4 col-xs-12">
            <!--Nómina-->
            <?php if ($nomina = 1) {
              //9
  include('modulos/nomina.php');
} ?>
            
          </div>
      </div>
    </div><!-- end .contentWrapper -->

    <!-- Footer -->
    <?php include('a_footer.php'); ?>