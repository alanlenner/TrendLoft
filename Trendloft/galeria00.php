<!--<link rel="stylesheet" href="resources/css/estilogaleria.css">-->
<?php
  session_start();
	include('header.php');

  if (isset($_GET['tipo']))
  {
    $tipo = ($_GET['tipo']);
  }

	//$tipo = 'Cabinets';
	//$tipo = 'Chandeliers';
	//	$tipo = 'Cabinets';
	//$tipo = 'Chandeliers';
	//$tipo = 'DiningChairs';
	//$tipo = 'DiningTables';
	//$tipo = 'Pendants';
	//$tipo = 'Sconces';
	//$tipo = 'Sofas';
?>

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
    <div class="col-md-12 carousel-inner" role="listbox">
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

						include('conexion.php');
						$sql = "SELECT * FROM imagen WHERE tipo = '$tipo' AND imageName = '$file'";
						$result = mysqli_query($mysqli, $sql);
						$row = mysqli_fetch_array($result);

						$titulo = $row["nombre"];
						$descripcion = $row["descripcion"];
						$precio = $row["precio"];

						mysqli_close($mysqli);

						//En el h2 cambiar el display a 'block' si hay una sesion de usuario activa.

			        if(isset($_SESSION['logueado']) and $_SESSION['logueado']){
								$imageDisplay .= '<img src="resources/images/galeria/'. $tipo .'/'. $file .'" alt="Chania" width="460"
							 height="345">
               </div>
                 <div class="col-md-12 panel panel-info" >
                     <div class="panel-heading">
                             <div class="panel-title">'. $titulo .'</div>
                             <div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
                     </div>
                     <div class="panel-body">
                       <p>'. $descripcion .'</p>
                       <h4>Price:'.$precio.'</h4>

                     </div>
               </div>
              ';
			        }
							else{
								$imageDisplay .= '<img src="resources/images/galeria/'. $tipo .'/'. $file .'" alt="Chania" width="460"
								height="345">
                    </div>
                  <div class="col-md-12 panel panel-info" >
                      <div class="panel-heading">
                              <div class="panel-title">'. $titulo .'</div>
                      </div>
                      <div class="panel-body">
                        <p>'. $descripcion .'</p>
                        <h4>Price: <a class="loginplz" href="login.php">Log in!</a></h4>

                      </div>
                  </div>

            ';
							}


							$i++;
					}
				}
				echo ($imageDisplay);
			 ?>


    <!-- Left and right controls -->

      </div>
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
