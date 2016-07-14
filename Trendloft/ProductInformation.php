<?php include('header.php');?>
<div class="container">
<div id="addbox" style="margin-top:15%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Add a new Product</div>
              </div>

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="addform" class="form-horizontal" role="form" action="upload.php">

                  <div class="form-group">
                          <label for="name" class="col-md-3 control-label">Name</label>
                          <div class="col-md-9">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Name of Product">
                          </div>
                    </div>


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
                      <div class="form-group">
                          <label for="price" class="col-md-3 control-label">Price</label>
                          <div class="col-md-9">
                              <input type="text" class="form-control"id="price" name="price" placeholder="Price of Product">
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="description" class="col-md-3 control-label">Description</label>
                          <div class="col-md-9">
                            <textarea class="form-control" rows="5" id="description"></textarea>
                          </div>
                      </div>

                      <div class="form-group">
                          <!-- Button -->
                          <div class="col-md-offset-3 col-md-9">
                                <input type="submit" class="btn btn-info" name="name" value="Continue..">
                          </div>
                      </div>

                    </form>



                </div>
            </div>
</div>
</div>
<?php include('footer.php');?>
