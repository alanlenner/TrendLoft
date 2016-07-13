<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>TrendLoft</title>

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

<!-- CONEXION A BASE DE DATOS -->
<?php
  include('conexion.php');

/* CODIGO PARA HACER CONSULTAS A BD */
/*
  $sql = "SELECT correo FROM usuarios";
  $res = mysql_query($sql, $link);

  while ($row = mysql_fetch_array($res)) {
   $campo = $row["correo"];
   echo $campo;
  }

/**/
?>


<body class="body">
	<div class="overlay">
		<section>
			<header>
				<div class="container wrapper">
					<div class="logo" id="prueba"><img src="resources/images/logoTrendL.jpg" alt=""></div>
					<nav class="menu">
						<a href="#home">Home</a>
						<a href="#furniture">Furniture</a>
						<a href="#cabinet">Cabinets</a>
						<a href="#lighting">Lighting</a>
					</nav>
          <nav class="social">
            <a href="http://facebook.com/trendloft"><img src="resources/images/LogoMakrBeigeFb.png" alt=""></a>
						<a href="http://twitter.com/trendloft"><img src="resources/images/LogoMakrBeigeTw.png" alt=""></a>
						<a href="http://instagram.com/trend_loft"><img src="resources/images/LogoMakrBeigeIg.png" alt=""></a>
            <a href="http://pintrest.com/trendloft"><img src="resources/images/LogoMakrBeigePin.png" alt=""></a>
            <a href="mailto:info@trendloft.net"><img src="resources/images/LogoMakrBeigeMail.png" alt=""></a>
					</nav>
				</div>

			</header>
