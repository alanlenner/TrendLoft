<?php include('header.php');

      $Name = $_POST['name'];
      $Type = str_replace(' ', '', $_POST['type']);
      $Price = $_POST['price'];
      $Description = $_POST['description'];

        if(isset($_FILES['ImageUpload'])){
          //Si se selecciona una imagen a subir
          $imageName = $_FILES['ImageUpload']['name'];
          $imageTemp = $_FILES['ImageUpload']['tmp_name'];
          $imageType = $_FILES['ImageUpload']['type'];

          //Filtrar el nombre
          $imageName = preg_replace("#[^a-z0-9.]#i", "", $imageName);

          //Manejo de errores
          if(!$imageTemp){
            echo("You need to select a file to upload");
          }else {
            move_uploaded_file($imageTemp, "resources/images/galeria/$Type/$imageName");

            /* Inserción en Base de Datos */
            include('conexion.php');
            $sql = "INSERT INTO imagen (nombre,descripcion,tipo,precio,imageName)
                    VALUES ('$Name','$Description','$Type','$Price','$imageName')";

            if ($stmt = mysqli_prepare($mysqli, $sql)) {
              mysqli_stmt_execute($stmt);
              $error_sql = mysqli_stmt_error($stmt);
              mysqli_stmt_close($stmt);
            }
            mysqli_close($mysqli);
          }
        }
?>

<div class="container">
  <div id="uploadbox" style="margin-top:15%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info" >
      <div class="panel-heading">
        <div class="panel-title">Upload a Picture</div>
      </div>
      <div style="padding-top:30px" class="panel-body" >
        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
        <div class="">

          <!-- Esto es solo para propositos de prueba, eliminar al completar la implementacion -->
          <!-- Esto es solo para propositos de prueba, eliminar al completar la implementacion -->
          <h3>
            <?php
              if (isset($Name)){
                echo $Name.'<hr>';
                echo $Type.'<hr>';
                echo $Price.'<hr>';
                echo $Description.'<hr>';
              } else {
                echo 'No hay nada pana... :(';
              }

            ?>
          </h3>
          <!-- Esto es solo para propositos de prueba, eliminar al completar la implementacion -->
          <!-- Esto es solo para propositos de prueba, eliminar al completar la implementacion -->

          <!-- Button -->
          <div class="form-group">
              <div class="col-md-offset-3 col-md-9">
                <a href="productinformation.php" type="button" class="btn btn-info">Finish</a>
              </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<?php include('footer.php');?>
