<?php include('a_header.php'); ?>
       <!-- Page content -->
    <div class="contentWrapper">
      
      <div class="profile-header">
        <div class="row">
          <div class="header-l col-sm-7 col-xs-12">
            <img src="https://cdn.pixabay.com/photo/2012/04/13/21/07/user-33638_1280.png" alt="User image">
            <div class="header-l-info">
              <h3><?php echo $nombre; ?> <a href="#" title="Verified"></a></h3>
              <h5>Viajero por excelencia</h5>
              <span></span>
            </div>
            <div class="header-l-btn">
              <a href="#" class="btn-edit"> Edición</a>
              <a href="?personalizar=1" class="btn-activity">Personalización Dashboard</a>
            </div>
          </div>
          <div class="header-r col-sm-5 col-xs-12">
            <h5 class="availability">Tipo de cliente: <span>Universitario</span></h5>
            <h5 class="age">Edad: <span>25</span></h5>
            <h5 class="location">Locación: <span>Guadalajara, México.</span></h5>
            <h5 class="phone">Numero: <span>(33) 3181-2548</span></h5>
            <a href="#" title="GitHub"><img src="http://www.freepngimg.com/thumb/facebook/2-2-facebook-free-download-png-thumb.png" width="30px" alt=""></i></a>
            <a href="#" title="Twitter"><img src="http://www.freepngimg.com/thumb/twitter/2-2-twitter-png-file-thumb.png" width="30px" alt=""></a>
            <a href="#" title="Facebook"><img src="https://cdn3.iconfinder.com/data/icons/social-icons-5/607/YouTube_Play.png" width="30px" alt=""></a>
            <a href="#" title="YouTube"><img src="https://images.vexels.com/media/users/3/137382/isolated/preview/c59b2807ea44f0d70f41ca73c61d281d-icono-del-logotipo-linkedin-by-vexels.png" width="30px" alt=""></a>
            <a href="#" title="LinkedIn"><img src="https://image.flaticon.com/icons/png/512/25/25231.png" width="30px" alt=""></a>
          </div>
        </div>
      </div>
      
        <?php 
        if(isset($_GET['personalizar']) && !empty($_GET['personalizar'])){
 if($_GET['personalizar'] == '1'){ 
  echo '<form action="datos_dash.php" method="POST">
        <label>Que deseas visualizar en tu dashboard</label><br>
        <label><input type="checkbox" name="ingreso" value="1">Ingresos</label><br>
        <label><input type="checkbox" name="egresos" value="2">Egresos</label><br>
        <label><input type="checkbox" name="egresos_m" value="3">Egresos_mensuales</label><br>
        <label><input type="checkbox" name="ingreso_m" value="4">Ingresos mensuales</label><br>
        <label><input type="checkbox" name="grafica" value="5">Grfica de ganancias</label><br>
        <label><input type="checkbox" name="hist_c" value="6">Historial de Compras</label><br>
        <label><input type="checkbox" name="hist_t" value="7">Historial de transacciones</label><br>
        <label><input type="checkbox" name="promo" value="8">promociones</label><br>
        <label><input type="checkbox" name="nomi" value="9">Nomina</label><br>
        <label><input type="submit"></label>
      </form>';

  }
 }
         ?>
    </div>


    <!-- Footer -->
    <?php include('a_footer.php'); ?>