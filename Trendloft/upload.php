<?php include('header.php');

      $Name = $_POST['name'];
      $Type= $_POST['type'];
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
            move_uploaded_file($imageTemp, "resources/images/galeria/Cabinets/$imageName");
          }
        }





/* Inserción en Base de Datos */
/*
  $sql = "INSERT INTO imagen VALUES ('$Name','$Description','$Path','$Type')";
  if ($stmt = mysqli_prepare($mysqli, $sql)) {
    mysqli_stmt_execute($stmt);
    $error_sql = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
  }

*/
?>

<div class="container">
  <div id="uploadbox" style="margin-top:15%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info" >
      <div class="panel-heading">
        <div class="panel-title">Upload a Picture</div>
      </div>

      <div style="padding-top:30px" class="panel-body" >

        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

        <form id="addform" class="form-horizontal" role="form">

          <div class="form-group">
                  <label for="name" class="col-md-3 control-label">Picture</label>
                  <div class="col-md-9">
                        <input type="file" name="ImageUpload">
                  </div>
            </div>

              <div class="form-group">
                  <!-- Button -->
                  <div class="col-md-offset-3 col-md-9">
                        <input type="submit" class="btn btn-info" name="name" value="Upload">
                  </div>
              </div>

            </form>



      </div>
    </div>
  </div>
</div>
<?php include('footer.php');?>
