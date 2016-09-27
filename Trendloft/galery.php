<?php
  session_start();
	include('header.php');

  if (isset($_GET['tipo']))
  {
    $tipo = ($_GET['tipo']);
  }
?>

<div class="wrapper fondo-galeria" id="imagenInicio">

	<img class="active" src="resources/images/furniture2.png" alt="" />
	<img src="resources/images/hdb2.jpeg" alt="" />
	<img src="resources/images/Main_TL_Banner.png" alt="" />

</div>

<div class="galeria" id="galeria">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner foto-galeria" role="listbox">

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
                        $imageDisplay .= '
                                <img src="resources/images/galeria/'. $tipo .'/'. $file .'" alt="Chania">';

                        $i++;

                        if(isset($_SESSION['logueado']) and $_SESSION['logueado']){
                            $imageDisplay .= '
                                    <div class="carousel-textbox">
                                        <p style="font-size:16px;">'.$titulo.'</p>
                                        <p>'.$descripcion.'</p>
                                        <h4>Price: $'.$precio.'</h4>
                                    </div>
                                </div>
                            ';
                        } else{
                            $imageDisplay .= '
                                    <div class="carousel-textbox">
                                        <p style="font-size:16px;">'.$titulo.'</p>
                                        <p>'.$descripcion.'</p>
                                        <h4>Price: <a class="loginplz" href="login.php">Log in!</a></h4>
                                    </div>
                                </div>
                            ';
                        }
                    }
                }

                echo $imageDisplay;

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

<footer style="top:105%;">
  <div class="container info wrapper" id="info">
<!-- Aqui iconos-->
    <div class="row icono">
      <div class="col-xs-4">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        <hr>
      </div>
      <div class="col-xs-4">
        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
        <hr>
      </div>
      <div class="col-xs-4">
        <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
        <hr>
      </div>
    </div>

<!-- Aqui empieza About Us-->
<div class="row">
      <div class="col-xs-4">
          <p>About Us</p>
        <p>	Establishments primarily engaged in the retail sale of household furniture. These stores may also sell home furnishings, major appliances, and floor coverings.
        </p>
        <a>Read more..</a>
      </div>
      <!-- Aqui empieza Dirección-->
    <div class="col-xs-4">
        <p>500 NE 185th St. Miami, FL. 33179</p>
      <div class=" iframe-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2707.792914175818!2d-66.87145266086156!3d10.466309556093748!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xdedec062827e1cd0!2sCentro+Comercial+Santa+F%C3%A9!5e0!3m2!1ses!2sve!4v1447210628403"
        allowfullscreen></iframe>
      </div>
    </div>
      <div class="col-xs-4">
        <div class="row">
            <div class="col-lg-12">
                  <p>info@trendloft.net</p>
            </div>
        </div>

          <div class ="col-lg-6">
            <ul class="redesFoot">
            <li><a href="http://facebook.com/trendloft"><img src="resources/images/LogoMakrBeigeFb.png" alt=""></a></li>
          </ul>
          </div>
          <div class ="col-lg-6">
            <ul class="redesFoot">
              <li><a href="http://twitter.com/trendloft"><img src="resources/images/LogoMakrBeigeTw.png" alt=""></a></li>
            </ul>
          </div>
          <div class ="col-lg-6">
            <ul class="redesFoot">
              <li><a href="http://instagram.com/trend_loft"><img src="resources/images/LogoMakrBeigeIg.png" alt=""></a></li>
              </ul>
          </div>
          <div class ="col-lg-6">
            <ul class="redesFoot">
                <li><a href="http://pintrest.com/trendloft"><img src="resources/images/LogoMakrBeigePin.png" alt=""></a></li>
            </ul>
          </div>
      </div>

<!-- Aqui empieza el login -->
      <div class="col-sm-12">
      <?php
        if(isset($_SESSION['logueado']) and $_SESSION['logueado']){
           $nombre = $_SESSION['userid'];
           echo "  <div class=''>
               <p>
                 Welcome $nombre!
               </p>
             </div>
             <a href='Logout.php'>Logout</a>
             ";
        }
        else{
            echo "<a href='Login.php'>Log In</a>";
        }

         ?>
      </div>

</div>
    </div>
  </div>
</footer>
</div>


</body>

</html>
