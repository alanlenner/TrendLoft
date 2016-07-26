<?php
session_start();
 include('header.php');


if(isset($_SESSION['logueado']) and $_SESSION['logueado'] and $_SESSION['userid']== 'admin'){

?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div id="addbox" style="margin-top:10%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >

          <div class="panel-heading">
            <div class="panel-title">Add a new Product</div>
          </div>

          <div style="padding-top:30px" class="panel-body" >

            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

            <form id="addform" class="form-horizontal" role="form" method="POST" action="upload.php"
              enctype="multipart/form-data">

              <!-- Name -->
              <div class="form-group">
                <label for="name" class="col-md-3 control-label">Name</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name of Product">
                </div>
              </div>

              <!-- Type -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="sel1">Type</label>
                <div class="col-md-9">
                  <select class="form-control" name ="type" id="type">
                    <option>Dining Chairs</option>
                    <option>Dining Tables</option>
                    <option>Sofas</option>
                    <option>Chandeliers</option>
                    <option>Sconces</option>
                    <option>Pendants</option>
                    <option>Cabinets</option>
                  </select>
                </div>
              </div>

              <!-- Price -->
              <div class="form-group">
                <label for="price" class="col-md-3 control-label">Price</label>
                <div class="col-md-9">
                  <input type="number" class="form-control"id="price" name="price" placeholder="Price of Product">
                </div>
              </div>

              <!-- Description -->
              <div class="form-group">
                <label for="description" class="col-md-3 control-label">Description</label>
                <div class="col-md-9">
                  <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                </div>
              </div>

              <!-- File -->
              <div class="form-group">
                <label for="name" class="col-md-3 control-label">Picture</label>
                <div class="col-md-9">
                  <input type="file" name="ImageUpload">
                </div>
              </div>

              <!-- Button -->
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
