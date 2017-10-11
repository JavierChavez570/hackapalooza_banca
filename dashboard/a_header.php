<?php 
session_start();
$var_value = $_SESSION['varname'];
$resultado = substr($var_value, 0,8).".";
$nombre = ucwords($resultado);
$analizis_actividades = "Vuelos de Aviones AeroMexica";
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ThemeSonyX">
    <meta name="description" content="Admin Dashboard">

    <title>Banka Online | La nueva cara de la banca</title>

    <!-- Bootstrap -->
    <link href="http://themesonyx.com/preview/rocket/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="http://themesonyx.com/preview/rocket/css/font-awesome.min.css">
    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="ex.css">
    <!-- Iconos -->
    <link rel="stylesheet" href="text/css" href="fuentes.css">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="http://themesonyx.com/preview/rocket/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Preloader -->
    <div class="load-bar">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
    <!-- Header -->
    <nav class="nav-top navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <div class="nav-top-mobile">
            <div class="mobile-user">
              <ul>
                <li class="dropdown">
                  <a href="#" class="mobile-user-profile dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i></a>
                  <ul class="mobile-user-dropdown dropdown-menu animated fadeInDown">
                    <li><a href="perfil.php">Perfil</a></li>
                    <li><a href="config.php">Configuración de Cuenta</a></li>
                    <li><a href="javascript:;">Contacto Banka Online</a></li>
                    <li><a href="javascript:;">Registro de Actividades</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href=".php"><i class="fa fa-sign-out" aria-hidden="true"></i>Salir</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="mobile-search">
              <a href="#" class="mobile-search-trigger" role="button"><i class="fa fa-search" aria-hidden="true"></i></a>
              <div class="mobile-search-active animated fadeInDown">
                  <form class="mobile-search-box" action="">
                      <i class="glyphicon glyphicon-search"></i>
                      <input class="mobile-search-input" autofocus type="text" spellcheck="false" placeholder="Busqueda rápida...">   
                      <button type="button" class="close">
                        <span>&times;</span>
                      </button> 
                  </form>
              </div>
            </div>
          </div><!-- end .nav-top-mobile -->
          <div class="logo ">
            <a class="navbar-brand" href="index.php">
            <img src="logo.png" alt="Rocket Logo">
              <span>Banka Online</span>
            </a>
          </div>
        </div>
        <!-- Collect the nav links, forms, and other content and hide -->
        <div  class="collapse navbar-collapse hidden-xs">
          <ul class="user-profile nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="user-block dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        				<span class="user-name">Hola, <?php echo $nombre ?></span>
        				<span class="caret"></span>
                <img src="https://cdn.pixabay.com/photo/2012/04/13/21/07/user-33638_1280.png" alt="User image">
              </a>
              <ul class="user-profile-dropdown dropdown-menu animated fadeInDown">
                <li>
                  <a href="perfil.php">Perfil</a>
                </li>
                <li>
                  <a href="config.php">Configuración de cuenta</a>
                </li>
                <li>
                  <a href="javascript:;">Contacto Banka Online</a>
                </li>
                <li>
                  <a href="javascript:;">Registro de Actividad</a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a href="../index.php">Salir</a>
                </li>                
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right notify">
            <li class="dropdown">
              <a href="#" class="lang dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ES<span class="caret"></span></a>
              <ul class="lang-dropdown dropdown-menu animated flipInX">
                <li><a class="lang-item" href="javascript:;">
                      <img src="https://qph.ec.quoracdn.net/main-qimg-45ee634d5a033b5bbb11d231864cc6c3" alt="English flag" width="20px"> English
                    </a>
                </li>
                <li><a class="lang-item" href="javascript:;">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Flag_of_Germany_%283-2_aspect_ratio%29.svg/220px-Flag_of_Germany_%283-2_aspect_ratio%29.svg.png" alt="German flag" width="20px"> German
                    </a>
                </li>
                <li><a class="lang-item" href="javascript:;">
                      <img src="http://www.warstore.co.uk/ekmps/shops/marlina/images/france-3-x-2-flag-2743-p.gif" alt="French flag" width="20px"> French
                    </a>
                </li>
                <li><a class="lang-item" href="javascript:;">
                      <img src="http://flagpedia.net/data/flags/normal/ru.png" alt="Russian flag" width="20px"> Russian
                    </a>
                </li>
                <li><a class="lang-item" href="javascript:;">
                      <img src="http://www.crwflags.com/fotw/images/e/es_civil.gif" alt="Spanish flag" width="20px"> Spanish
                    </a>
                </li>
              </ul>

            </li>
            <li class="dropdown">
              <a href="#" class="notification dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="" aria-hidden="true"><img src="http://www.iconsdb.com/icons/preview/white/report-3-xxl.png" alt="" width="20px"></i></a>
              <ul class="notification-dropdown dropdown-menu animated flipInX">
                <li><a class="notification-item" href="javascript:;">
                    <span class="notification-item-content">
                      <i class="fa fa-users" aria-hidden="true"></i>
                      Pago en Burguer King - $750.00
                    </span>
                    <span class="notification-item-time">3h ago</span>
                  </a>
                </li>
                <li><a class="notification-item" href="javascript:;">
                    <span class="notification-item-content">
                      <i class="fa fa-key" aria-hidden="true"></i>
                      Pago Floreria Gus. - $350.00
                    </span>
                    <span class="notification-item-time">5h ago</span>
                  </a>
                </li>
                <li><a class="notification-item" href="javascript:;">
                    <span class="notification-item-content">
                      <i class="fa fa-line-chart" aria-hidden="true"></i>
                       Transferencia Tio Chuy + $45.00
                    </span>
                    <span class="notification-item-time">1d ago</span>
                  </a>
                </li>
                <li><a class="notification-link" href="javascript:;">Visualizar historial Completo</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="messages dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="" aria-hidden="true"><img src="http://flaticons.net/gd/makefg.php?i=icons/Miscellaneous/Bell.png&r=255&g=255&b=255" width="20px" alt=""></i></a>
              <ul class="messages-dropdown dropdown-menu animated fadeInDown">
                <li><a class="message-item" href="view-message.html">
                      <span class="message-item-img">
                        <img src="https://cdn.pixabay.com/photo/2012/04/13/21/07/user-33638_1280.png" alt="User image">
                      </span>
                      <div class="message-block">
                        <div class="message-item-from">Pagos en McDonalds NFC</div>
                        <div class="message-item-content">Ya puedes pagar en mc...</div>
                      </div>
                      <span class="message-item-time">1h ago</span>
                    </a>
                </li> 
                <li><a class="message-item" href="">
                      <span class="message-item-img">
                        <img src="https://cdn.pixabay.com/photo/2012/04/13/21/07/user-33638_1280.png" alt="User image">
                      </span>
                      <div class="message-block">
                        <div class="message-item-from">Porcentaje descuento %</div>
                        <div class="message-item-content">Texto relleno</div>
                      </div>
                      <span class="message-item-time">3h ago</span>
                    </a>
                </li>
                <li><a class="message-item" href="">
                      <span class="message-item-img">
                        <img src="https://cdn.pixabay.com/photo/2012/04/13/21/07/user-33638_1280.png" alt="User image">
                      </span>
                      <div class="message-block">
                        <div class="message-item-from">Texto relleno</div>
                        <div class="message-item-content">Texto relleno</div>
                      </div>
                      <span class="message-item-time">6h ago</span>
                    </a>
                </li>
                <li><a class="message-item" href="">
                      <span class="message-item-img">
                        <img src="https://cdn.pixabay.com/photo/2012/04/13/21/07/user-33638_1280.png" alt="User image">
                      </span>
                      <div class="message-block">
                        <div class="message-item-from">Texto relleno</div>
                        <div class="message-item-content">Texto relleno</div>
                      </div>
                      <span class="message-item-time">1d ago</span>
                    </a>
                </li>
                <li><a class="messages-link" href="#">Ver todas las notificacioness</a></li> 
              </ul>
            </li>
          </ul>
          <style>
            #resultado{
              z-index: 5000;
              background-color: #565656;
              color: #fff;
            }
          </style>
         	<form class="nav-search">
              <input class="nav-search-input" type="text" id="busqueda"  spellcheck="false" placeholder="Buscar...">
                <div id="resultado"></div>
              
          </form>
        </div><!-- end .navbar-collapse -->
      </div><!-- end .container-fluid -->
    </nav><!-- end .nav-top -->
    
    <!-- Page content -->
    <div class="contentWrapper">
      <div class="row">
        <h1 style="float: left;">Banka Online <h4><a href="resumen.php">Resumen ejecutivo de tu día</a>. </h4></h1>
        <h4> <marquee behavior="" direction="left" scrollamount="15"><h3><?php echo $nombre; ?> Tenemos excelentes promociones en <a href="promotions.php"><?php echo $analizis_actividades; ?></a></h3></marquee> </h4>
      </div>
      <div class="row cards">