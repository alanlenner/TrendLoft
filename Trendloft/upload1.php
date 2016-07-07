<?php include('header.php');?>
<link rel = "stylesheet" href="resources/css/Login.css">
<div class="wrapper imagenInicio">
<form enctype="multipart/form-data" action="" method="POST">
  <div class="form-group">
    <input name="uploadedfile" class="btn btn-personalizado" type="file">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-personalizado" value="Subir archivo">
  </div>
</form>


<?php
  $uploadedfileload="true";
  $uploadedfile_size=$_FILES['uploadedfile'][size];
  echo $_FILES[uploadedfile][name];
  if ($_FILES[uploadedfile][size]>200000)
  {$msg=$msg."El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
    $uploadedfileload="false";}

    if (!($_FILES[uploadedfile][type] =="image/pjpeg"  OR $_FILES[uploadedfile][type] =="image/png"))
    {$msg=$msg." Tu archivo tiene que ser JPG o PNG. Otros archivos no son permitidos<BR>";
      $uploadedfileload="false";}

      $file_name=$_FILES[uploadedfile][name];
      $add="uploads/$file_name";
      if($uploadedfileload=="true"){

        if(move_uploaded_file ($_FILES[uploadedfile][tmp_name], $add)){
          echo " Ha sido subido satisfactoriamente";
        }else{echo "Error al subir el archivo";}

      }else{echo $msg;}
  ?>
</div>
