<?php include('header.php'); ?>

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
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <?php
				$imageDisplay = "";
				$images = scandir("resources/images/galeria/Cabinets");
				$ignore = array(".","..");
				$i = '1';

				$titulo = "Titulo"; //Consulta SQL
				$descripcion = "Descripcion"; //Consulta SQL
				$precio = "Precio"; //Consulta SQL

				foreach ($images as $file) {
					if (!in_array($file, $ignore)){

						if ($i > 1){
							$imageDisplay .= '<div class="item">';
						} else {
							$imageDisplay .= '<div class="item active">';
						}

						$imageDisplay .= '<img src="resources/images/galeria/Cabinets/'. $file .'" alt="Chania" width="460" height="345">';

						$imageDisplay .= '<div class="carousel-caption">';

						$imageDisplay .= '<h3>'. $titulo.$i .'</h3><p>'. $descripcion.$i .'</p></div></div>';

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
