<?php include('header.php');

	//$tipo = 'Cabinets';
	//$tipo = 'Chandeliers';
	//$tipo = 'DiningChairs';
	//$tipo = 'DiningTables';
	//$tipo = 'Pendants';
	$tipo = 'Sconces'; //De todas es la que se ve mas limpia debido a que tiene el mismo tamaño
	//$tipo = 'Sofas'; //Tiene todas las fotos (12 imagenes)

	$titulo = "Titulo"; //Consulta SQL
	$descripcion = "Descripcion"; //Consulta SQL
	$precio = "Precio"; //Consulta SQL

?>

<script type="text/javascript">
	$('.carousel').carousel('pause');
</script>

<div class="wrapper" id="imagenInicio">

	<img class="active" src="resources/images/furniture2.png" alt="" />
	<img src="resources/images/hdb2.jpeg" alt="" />
	<img src="resources/images/Main_TL_Banner.png" alt="" />

</div>

<div class="galeria" id="galeria">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
			<?php
				$imageDisplay = "";
				// array = ['.','..','foto1.jpg' ... ]
				$photos = count(scandir("resources/images/galeria/$tipo"))-2;

				for ($i = 0; $i < $photos; $i++) {
					if ($i > 0){
						$imageDisplay .= '<li data-target="#myCarousel" data-slide-to="'. $i .'"></li>';
					} else {
						$imageDisplay .= '<li data-target="#myCarousel" data-slide-to="'. $i .'" class="active"></li>';
					}
				}
				echo ($imageDisplay);
			 ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php
				$imageDisplay = "";
				$images = scandir("resources/images/galeria/$tipo");
				$ignore = array(".","..");
				$i = '1';

				foreach ($images as $file) {
					if (!in_array($file, $ignore)){

						if ($i > 1){
							$imageDisplay .= '<div class="item">';
						} else {
							$imageDisplay .= '<div class="item active">';
						}

						//Borrar $i al implementar BD
						//En el h2 cambiar el display a 'block' si hay una sesion de usuario activa.
						$imageDisplay .= '<img src="resources/images/galeria/'. $tipo .'/'. $file .'" alt="Chania" width="460"
						height="345"><div class="carousel-caption"><h3>'. $titulo.$i .'</h3><p>'. $descripcion.$i .'</p>
						<h2 style="display:none">'. $precio .'$</h2></div></div>';

						$i++;
					}
				}
				echo ($imageDisplay);
			 ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<?php include('footer.php'); ?>
