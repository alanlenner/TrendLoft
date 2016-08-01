<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>TrendLoft</title>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type='text/css' href="vendors/bootstrap/css/bootstrap.min.css">
  <script src="vendors/jquery/jquery-3.0.0.min.js"></script> <!-- NO FUNCIONA! -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Condensed|Montserrat|Open+Sans">

  <link rel="stylesheet" href="resources/css/estilos.css">
    <link rel="stylesheet" href="resources/css/Login.css">
    <link rel="stylesheet" href="resources/css/galeria.css">
  	<link rel="stylesheet" href="resources/css/elastislide.css">
  <link rel='stylesheet' type='text/css' href='resources/css/style.php'>
	<script type="text/javascript" src="resources/js/scroll.js"></script>
  <script type="text/javascript" src="resources/js/background.js"></script>
  <script type="text/javascript" src="resources/js/galeria.js"></script>
  <script type="text/javascript" src="resources/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="resources/js/jquery.elastislide.js"></script>
  <script type="text/javascript" src="resources/js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="resources/js/scroll.js"></script>
  <script type="text/javascript" src="resources/js/photos.js"></script>
  <script type="text/javascript" src="resources/js/login.js"></script>
<!--
  <script type="text/javascript" src="vendors/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="vendors/bootstrap/js/jquery.js"></script>
  <script type="text/javascript" src="vendors/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="vendors/bootstrap/js/npm.js"></script>
-->
  <noscript>
		<style>
			.es-carousel ul{
				display:block;
			}
		</style>
	</noscript>
	<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">
		<div class="rg-image-wrapper">
			{{if itemsCount > 1}}
				<div class="rg-image-nav">
					<a href="#" class="rg-image-nav-prev">Previous Image</a>
					<a href="#" class="rg-image-nav-next">Next Image</a>
				</div>
			{{/if}}
			<div class="rg-image"></div>
			<div class="rg-loading"></div>
		</div>
	</script>

</head>

<body class="body">
	<!--<div class="overlay">-->
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><div class="logo" id="prueba"><img src="resources/images/logoTrendL.jpg" alt=""></div></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class=""><a href="index.php">Home </a></li>
            <li class=""><a href="galeria00.php?tipo=Cabinets">Cabinets </a></li>
            <li class="desplegable"><a href="#" class="despeglable-opcion">Furniture</a>
              <div>
                <ul class="desplegable">
                  <li><a href="galeria00.php?tipo=DiningChairs">Dining Chairs</a></li>
                  <li><a href="galeria00.php?tipo=DiningTables">Dining Tables</a></li>
                  <li><a href="galeria00.php?tipo=Sofas">Sofas</a></li>
                  <li><a href="galeria00.php?tipo=Barstools">Barstools</a></li>
                </ul>
              </div>
            </li>
            <li class="desplegable"><a href="#" class="despeglable-opcion">Lighting</a>
              <div>
                <ul class="desplegable">
                  <li><a href="galeria00.php?tipo=Chandeliers">Chandeliers</a></li>
                  <li><a href="galeria00.php?tipo=Sconces">Sconces</a></li>
                  <li><a href="galeria00.php?tipo=Pendants">Pendants</a></li>
                </ul>
              </div>
            </li>
          </ul>


          <ul class="nav navbar-nav navbar-right">
            <nav class="social">
              <a href="http://facebook.com/trendloft"><img src="resources/images/LogoMakrBeigeFb.png" alt=""></a>
              <a href="http://twitter.com/trendloft"><img src="resources/images/LogoMakrBeigeTw.png" alt=""></a>
              <a href="http://instagram.com/trend_loft"><img src="resources/images/LogoMakrBeigeIg.png" alt=""></a>
              <a href="http://pintrest.com/trendloft"><img src="resources/images/LogoMakrBeigePin.png" alt=""></a>
              <a href="mailto:info@trendloft.net"><img src="resources/images/LogoMakrBeigeMail.png" alt=""></a>
            </nav>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
