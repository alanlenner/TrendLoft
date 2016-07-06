<?php
  header("Content-type: text/css; charset: UTF-8");

  $random = rand(0,2);

  $images = array("../images/furniture2.png","../images/hdb2.jpeg","../images/Main_TL_Banner.png");

  $fondo = $images[$random];
?>

#home1{
	background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.1)), url("<?php echo $fondo; ?>");
  background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.)), url("<?php echo $fondo; ?>");
  background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.1)), url("<?php echo $fondo; ?>");
  background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.1)), url("<?php echo $fondo; ?>");
  background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.8)), to(rgba(0, 0, 0, 0.1))), url("<?php echo $fondo; ?>");
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.1)), url("<?php echo $fondo; ?>");
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	width: 100%;
}
