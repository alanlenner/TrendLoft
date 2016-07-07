<?php include('header.php');?>
<link rel = "stylesheet" href="resources/css/Login.css">
<div class="wrapper imagenInicio">

  <form action="" method="post" class="well well-sm form-horizontal addPic">
      <div class="form-group">
        <label class="control-label col-md-4" for="user">Name of Product</label>
        <input class= "form-control col-md-8" name="user" type="text" >
      </div>
      <div class="form-group">
        <label class="control-label col-md-4"  for="type">Type of Product</label>
        <select class="form-control col-md-8" id="type">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
    </select>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3"  for="description">Description</label>
        <textarea class="form-control col-md-8" rows="5" id="description"></textarea>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2"  for="price">Price</label>
        <input class="form-control col-md-8"  name="price" type="text">

      </div>
    <div class="col-md-12 col-md-offset-2">
          <input type="submit" name="login" style="float:right;" class="btn btn-personalizado" value="Upload Picture">
      </div>
  </form>



</div>
<?php include('footer.php');?>
