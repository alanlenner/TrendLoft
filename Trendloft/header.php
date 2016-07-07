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
  <link rel='stylesheet' type='text/css' href='resources/css/style.php'>
	<script type="text/javascript" src="resources/js/scroll.js"></script>
  <script type="text/javascript" src="resources/js/background.js"></script>

</head>

<!-- CONEXION A BASE DE DATOS -->
<?php
  $user = 'root';
  $password = 'root';
  $db = 'trendloft';
  $host = 'localhost';
  $port = 8889;

  $link = mysql_connect("$host:$port", $user, $password) or die('Could not connect to server.' );
  $db_selected = mysql_select_db($db, $link)or die('Could not select database.');

/* CODIGO PARA HACER CONSULTAS A BD


  $sql = "SELECT correo FROM usuarios";
  $res = mysql_query($sql, $link);

  while ($row = mysql_fetch_array($res)) {
   $campo = $row["correo"];
   echo $campo;
  }


*/
?>


<body class="body">
	<div class="overlay">
		<section>
			<header>
				<div class="wrapper">
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
        <!--    <a href="mailto:info@trendloft.net"><img src="resources/images/LogoMakrBeigeMail.png" alt=""></a> -->
					</nav>
				</div>
			</header>
