<?php include('header.php');?>
<link rel = "stylesheet" href="resources/css/Login.css">
<div class="wrapper imagenInicio">

  <form action="" method="post" class="well well-sm form-horizontal register">
      <div class="form-group">
        <label class="control-label col-md-2" for="user">Email</label>
        <input class= "form-control col-md-10" name="user" type="text" >
      </div>
      <div class="form-group">
        <label class="control-label col-md-2"  for="password">Password</label>
        <input class="form-control col-md-10" name="password" type="password">
      </div>
      <div class="form-group">
        <label class="control-label col-md-2"  for="password">Confirm Password</label>
        <input class="form-control col-md-10" name="Cpassword" type="password">
      </div>
      <div class="form-group">
        <label class="control-label"  for="password">Receive news about our products?</label>
        <input class="form-control" style="float:right;" name="Cpassword" type="checkbox">

      </div>
      <div class="col-md-12 col-md-offset-2">
          <input type="submit" name="login" style="float:right;" class="btn btn-personalizado" value="Sign Up">
      </div>
  </form>

</div>
<?php include('footer.php');?>
