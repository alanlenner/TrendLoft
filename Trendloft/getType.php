<?php
//GET TYPE
  include('conexion.php');
  if($_POST['type'])
  {
   $type=$_POST['type'];

   $sql = "SELECT * FROM imagen WHERE tipo = '$type'";
   $result = mysqli_query($mysqli, $sql);
?>
<option selected="selected">--Select Photo--</option>
<?php
   while($row = mysqli_fetch_array($result))
   {
?>
<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
<?php
   }
  }
  mysqli_close($mysqli);
?>
