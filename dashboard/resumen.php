<?php 
include('a_header.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Resumen ejecutivo</title>
 </head>
 <body>
    <style>
        li{visibility: hidden;}
    </style> 
    <ul><li><div class="ocultate">
     <embed src="transcript.mp3" autostart="true" width="150" height="20" loop="1"></embed>
     </div></li></ul>
    
     <button type="button" class="btn btn-primary btn-lg btn-block">Agendar Cita con Corredor</button>
<button type="button" class="btn btn-default btn-lg btn-block">Agendar cita con Agencia de Viaje</button>
 </body>
 </html>
 <?php 
include('a_footer.php');
 ?>