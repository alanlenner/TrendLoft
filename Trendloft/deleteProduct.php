<?php
session_start();
 include('header.php');


if(isset($_SESSION['logueado']) and $_SESSION['logueado'] and $_SESSION['userid']== 'adminTrendloft@admin.com'){

?>
<br>
<br>
<br>
<?php
  if(isset($_SESSION['borrado']) && $_SESSION['borrado']==TRUE)
  {
    echo'
    <div class="alert alert-success">
      <strong>Success!</strong> Selected product deleted!
    </div>
    ';
    $_SESSION['borrado'] = false ;
  }

  if(isset($_SESSION['error']) && $_SESSION['error']==TRUE)
  {
    echo '
    <div class="alert alert-warning alert-dismissable" id="alert">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>¡Error!</strong>  There were error in the process, please try again.
    </div>';
    $_SESSION['error'] = false ;
  }
?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div id="addbox" style="margin-top:10%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >

          <div class="panel-heading">
            <div class="panel-title">Delete Product</div>
          </div>

          <div style="padding-top:30px" class="panel-body" >

            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

            <form id="addform" class="form-horizontal" role="form" method="POST" action="delete.php"
              enctype="multipart/form-data">

              <!-- Type -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="sel1">Type</label>
                <div class="col-md-9">
                  <!--SELECT TYPE-->
                  <select class="form-control" name ="type" id="type" onchange="setType(this.value)">
                    <option selected="selected">--Select Type--</option>
                      <?php
                        include('conexion.php');
                        $sql = "SELECT distinct(tipo) FROM imagen";
                        $result = mysqli_query($mysqli, $sql);
                        while($row = mysqli_fetch_array($result))
                        {
                      ?>
                    <option value="<?php echo $row['tipo']; ?>"><?php echo $row['tipo']; ?></option>
                      <?php
                        }
                        mysqli_close($mysqli);
                      ?>
                  </select>
                </div>
              </div>

              <!--SELECT PHOTO TO BE DELETED-->
              <div class="form-group">
                <label for="name" class="col-md-3 control-label">Picture</label>
                <div class="col-md-9">
                  <select class="form-control" name ="picture" id="picture">
                    <option selected="selected">--Please select a type first--</option>
                  </select>
                </div>
              </div>

              <!--FORM BUTTON-->
              <div class="form-group">
                <div class="col-md-offset-3 col-md-9">
                  <input type="submit" class="btn btn-info" value="Continue..">
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
else {
  ?>
  <div style="margin-top:20%;margin-left:40%; position: absolute;" class="">
    <div  class="alert alert-danger container-fluid">
      <strong>ERROR!</strong> You cannot access this site.
    </div>
  </div>

<?php
}
include('footer.php');
 ?>


<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
