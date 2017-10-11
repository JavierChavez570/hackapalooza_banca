<style>
	.slider{width:100%; height: 100%; z-index: 0;}
.slider ul.slides{ margin:0; padding:0; list-style-type:none;}
.skdslider ul.slides li{  display: none;}
.skdslider ul.slides li img{ width: 100%;height:100%;border:0;}
</style>

<?php 
if(isset($_GET['voz']) && !empty($_GET['voz'])){
 if($_GET['voz'] == '1'){ 
 	echo '
 	<a href="index.php"><div class="close_app"><i><img src="http://www.palladiodecor.ie/LookFeel/CloseX.png" width="40px" alt=""></i></div></a>
 	<ul id="slide_protrade" class="slides">
<li>
	<div class="primero"><img src="https://cdn.dribbble.com/users/32512/screenshots/3546148/apple_siri_motion_animation_by_gleb.gif" alt="Imagen Fondon China"></div><div class="m_tres"><img src="https://cdn.dribbble.com/users/32512/screenshots/3546148/apple_siri_motion_animation_by_gleb.gif" alt="Imagen Fondon China"></div>
</li></ul>
<script>
function redireccionar(){
  window.locationf="http://localhost/banca/dashboard";
} 
setTimeout ("redireccionar()", 1000);</script>
';


 	}
 }
 if(isset($_GET['rostro']) && !empty($_GET['rostro'])){
 if($_GET['rostro'] == '2'){ 

echo '
<a href="index.php"><div class="close_app"><i><img src="http://www.palladiodecor.ie/LookFeel/CloseX.png" width="40px" alt=""></i></div></a>
<link rel="stylesheet" type="text/css" href="estilos_camara.css" media="all" />
	<div class="container">
 
  <div class="app">
 
    <a href="#" id="start-camera" class="visible">Lectura Rostro</a>
    <video id="camera-stream"></video>
    <img id="snap">
 
    <p id="error-message"></p>
 
    <div class="controls">
      <a href="#" id="delete-photo" title="Eliminar Foto" class="disabled"><i class="material-icons">delete</i></a>
      <a href="res_aprobacion.php"title="Tomar foto"><i class="material-icons">camera_alt</i></a>
      <a href="#" id="download-photo" download="foto.jpg" title="Descargar Foto" class="disabled"><i class="material-icons">file_download</i></a>  
    </div>
 
    <canvas></canvas>
 
  </div>
 
</div>
<script src="funcion_camara.js"></script>
<script>
jQuery.noConflict();
function redireccionar(){
  window.locationf="http://localhost/banca/dashboard";
} 
setTimeout ("redireccionar()", 5000);</script>
';

 	}
 }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Banca Online</title>

	<!-- Site favicon -->
	<link rel="shortcut icon" href="images/creative-fav.ico">

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

    <!-- Icon Font -->
    <link rel="stylesheet" href="http://54.200.79.82/projects/crative-coming-soon-template/css/font-awesome.css">

    <!-- CSS -->
    <link rel="stylesheet" href="http://54.200.79.82/projects/crative-coming-soon-template/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://54.200.79.82/projects/crative-coming-soon-template/css/animate.css">
    <link rel="stylesheet" href="http://54.200.79.82/projects/crative-coming-soon-template/css/text-animation.css">
    <link rel="stylesheet" href="http://54.200.79.82/projects/crative-coming-soon-template/css/vegas.min.css">
    <link rel="stylesheet" href="http://54.200.79.82/projects/crative-coming-soon-template/css/style.css">
    <link rel="stylesheet" href="http://54.200.79.82/projects/crative-coming-soon-template/css/media.css">
    <link rel="stylesheet" href="http://54.200.79.82/projects/crative-coming-soon-template/css/gray-theme.css">

</head>
<body>
	<!-- pre-loader -->
	<div class="pre-loader"></div>
	<!-- Custom HTML Start-->
	<div class="main-wrap">
		<div class="container-fluid padding-0 fullheight">
			<!-- header start -->
			<header class="col-lg-9 col-md-8 col-sm-12 col-xs-12 padding-0 clearfix header-wrap">
				<!-- Logo Start -->
					<div class="logo">
						<a href="javascript:;"><img src="logo.png" alt="Logo" width="250px"></a>
					</div>
				<!-- Logo End -->
				<!-- Navbar Start 
									<nav class="navbar">
						<ul class="nav navbar-nav">
							<li>
								<a href="javascript:;" data-id="about-us"></a>
							</li>
							<li>
								<a href="javascript:;" data-id="contact-us">CONTACT</a>
							</li>
						</ul>
					</nav>
				Navbar End -->
			</header>
			<!-- header End -->
			<!-- Intro Section with Image Background Start -->
			<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 padding-0 main-intro bg-cover-center">
				<!-- slideshow Start -->
					<div class="slideshow"></div>
				<!-- slideshow End -->
				<!-- Color Layer Start -->
					<div class="dark-layer"></div>
				<!-- Color Layer End -->
				<!-- Headline Start -->
					<div class="headline-wrap">
						<div class="d_table">
							<div class="d_table_v">
								<p class="additional-text">Somos</p>
								<h1 class="main-headline cd-headline clip is-full-width">
									<span class="cd-words-wrapper">
										<b class="is-visible">Nueva banca</b>
										<b>Inovación</b>
										<b>Banco Online</b>
									</span>
								</h1>
								<p class="description-text">La nueva cara de la banca onine.</p>
								<div class="subscribe-form clearfix">
									<form method="post" id="subscribe">
										<input type="submit" value="Chat Online" class="submit-btn">
										<div class="loading-btn" style="display:none;"></div>
									</form>
									<div class="form-success alert alert-success" style="display:none;">Thank you for Subscribe.</div>
									<div class="form-success alert alert-danger" style="display:none;">Please enter correct email address.</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Headline Start -->
			</div>
			<!-- Intro Section with Image Background End -->
			<!-- Aside with Color Background Start -->
			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 main-aside">
				<div class="d_table">
					<div class="d_table_v">
						<div class="aside-content">
							<p>La nueva cara de la banca online.</p>
							<a href="#" class="btn btn-outline dark" id="stayintouch-show">Ingreso Contraseña</a>
							<a href="index.php?voz=1" class="btn btn-outline dark" >Ingreso mediante Voz</a>
							<a href="index.php?rostro=2" class="btn btn-outline dark" >Ingresar mediante rostro</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Aside with Color Background End -->
			<!-- Stay In Touch Start -->
			<div class="stay-in-touch col-lg-3 col-md-4 col-sm-12 col-xs-12">
				<a href="#" class="btn btn-outline dark" id="stayintouch-hide"><i class="fa fa-times"></i></a>
				<div class="d_table">
					<div class="d_table_v">
						<h2 class="title fadeInUp line dark">Ingresar</h2>
						
							<form class="form form-dark" method="post" action="entrada.php">
								<div class="form-group fadeInUp">
									<input type="text" placeholder="User Name*" class="form-control" name="name">
								</div>
								<div class="form-group fadeInUp">
									<input type="password" placeholder="Contraseña*" class="form-control" name="pass">
								</div>
								<div class="form-group fadeInUp">
									<input type="password" placeholder="Confirma Contraseña*" class="form-control" name="pass_2">
								</div>
								<div class="form-group fadeInUp">
									<input type="submit" value="Entrar" class="submit-btn">
									<div class="loading-btn" style="display:none;"></div>
								</div>
							</form>
					</div>
				</div>
			</div>
			<!-- Stay In Touch End -->
			
			<!-- Social Icons Start
				<ul class="social-icons col-lg-9 col-md-8 col-sm-12 col-xs-12">
					<li>
						<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
					</li>
					<li>
						<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a href="https://linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
					</li>
					<li>
						<a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p"></i></a>
					</li>
					<li>
						<a href="https://plus.google.com/discover" target="_blank"><i class="fa fa-google-plus"></i></a>
					</li>
				</ul>
			Social Icons End -->
		</div>
	</div>
	<!-- Custom HTML End-->
	<!-- JS File -->
	<script type="text/javascript" src="http://54.200.79.82/projects/crative-coming-soon-template/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://54.200.79.82/projects/crative-coming-soon-template/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="http://54.200.79.82/projects/crative-coming-soon-template/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://54.200.79.82/projects/crative-coming-soon-template/js/modernizr.js"></script>
	<script type="text/javascript" src="http://54.200.79.82/projects/crative-coming-soon-template/js/text-animation.js"></script>
	<script type="text/javascript" src="http://54.200.79.82/projects/crative-coming-soon-template/js/vegas.min.js"></script>
	<script type="text/javascript" src="http://54.200.79.82/projects/crative-coming-soon-template/js/script.js"></script>
	<script type="text/javascript" src="http://54.200.79.82/projects/crative-coming-soon-template/js/contact-us.js"></script>
	<!-- slideshow Setting -->
	<script type="text/javascript" src="slideshow.js"></script>

</body>
</html>
