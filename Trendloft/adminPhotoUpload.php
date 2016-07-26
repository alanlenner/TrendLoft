<?php
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
      move_uploaded_file($imageTemp, "resources/images/galeria/$imageName");
    }

  }
 ?>

<!--Cambiar el action por index.php cuando se pruebe que todo funcione correctamente-->
<form class="photoUploader" action="adminPhotoUpload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="ImageUpload">Select a file to upload...<br /><br>
  <input type="submit" name="name" value="Upload">
</form>

<hr>
