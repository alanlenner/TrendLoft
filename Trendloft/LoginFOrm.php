<div class="container">
<div class="row">
<div class="col-sm-12">
  <div id="loginbox" style="margin-top:15%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="panel panel-info" >
              <div class="panel-heading">
                  <div class="panel-title">Sign In</div>
                  <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
              </div>

              <div style="padding-top:30px" class="panel-body" >


                  <form id="loginform" class="form-horizontal" method="POST" role="form">

                    <div style="display:none"  class="alert alert-warning alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>¡Error!</strong>  User Doesn´t Exist.
                    </div>

                      <div style="margin-bottom: 25px" class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                  <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Email">
                      </div>

                      <div style="margin-bottom: 25px" class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                  <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
                              </div>




                          <div style="margin-top:10px" class="form-group">
                              <!-- Button -->

                              <div class="col-sm-12 controls">
                              <input type="submit" class="btn btn-success" name="loginbutton" value="Login">
                              </div>
                          </div>


                          <div class="form-group">
                              <div class="col-md-12 control">
                                  <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                      Don't have an account!
                                  <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                      Sign Up Here
                                  </a>
                                  </div>
                              </div>
                          </div>
                      </form>



                  </div>
              </div>
  </div>
  <div id="signupbox" style="display:none; margin-top:15%" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
              <div class="panel panel-info">
                  <div class="panel-heading">
                      <div class="panel-title">Sign Up</div>
                      <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                  </div>
                  <div class="panel-body" >
                      <form id="signupform" class="form-horizontal" method="POST" role="form">




                          <div class="form-group">
                              <label for="email" class="col-md-3 control-label">Email</label>
                              <div class="col-md-9">
                                  <input type="text" class="form-control" name="email" placeholder="Email Address">
                              </div>
                          </div>


                          <div class="form-group">
                              <label for="password" class="col-md-3 control-label">Password</label>
                              <div class="col-md-9">
                                  <input type="password" class="form-control" name="passwd" placeholder="Password">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="Cpassword" class="col-md-3 control-label"> Confirm Password</label>
                              <div class="col-md-9">
                                  <input type="password" class="form-control" name="Cpasswd" placeholder="Password">
                              </div>
                          </div>


                          <div class="input-group">
                                    <div class="checkbox">
                                      <label>
                                        <input id="news" type="checkbox" name="news" value="1">Receive News!
                                      </label>
                                    </div>
                          </div>


                          <div class="form-group">
                              <!-- Button -->
                              <div class="col-md-offset-3 col-md-9">
                                <input type="submit" class="btn btn-success" name="registerbutton"   value="Register">
                                </div>
                          </div>



                      </form>
                   </div>
              </div>




   </div>
</div>

</div>

</div>
