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

                    <!--Email (id:login-username)-->
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username"
                            pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$"
                            oninvalid="setCustomValidity('Campo obligatorio, ej: correo@dominio.com')"
                            oninput="setCustomValidity('')" onblur="onBlurDeInputs(this.id)"
                            placeholder="Email" maxlength="30" required>
                    </div>


                     <!--Password (id:login-password)-->
                     <div style="margin-bottom: 25px" class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                         <input id="login-password" type="password" class="form-control" name="password"
                         placeholder="Password" oninput="setCustomValidity('')" onblur="onBlurDeInputs(this.id)"
                         oninvalid="setCustomValidity('Campo obligatorio, debe contener mínimo 7 caracteres, 1 número y una letra en mayúsculas')"
                         pattern="^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9]).{6,})\S$"
                         maxlength="12" required>
                    </div>

<<<<<<< HEAD
=======

                    <!--Remember me-->
                      <div class="input-group">
                                <div class="checkbox">
                                  <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                  </label>
                                </div>
                              </div>

>>>>>>> 21089942e4a6373666d5ece01562476ae96e66cc

                        <!-- Button -->
                          <div style="margin-top:10px" class="form-group">
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



                          <!-- Email (id:signup-username)-->
                          <div class="form-group">
                              <label for="email" class="col-md-3 control-label">Email</label>
                              <div class="col-md-9">
                                  <input type="text" class="form-control" name="email" id="signup-username"
                                  placeholder="Email Address"
                                  pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$"
                                  oninvalid="setCustomValidity('Campo obligatorio, ej: correo@dominio.com')"
                                  oninput="setCustomValidity('')" onblur="onBlurDeInputs(this.id)"
                                  maxlength="30" required>
                              </div>
                          </div>

                          <!-- Password (id:signup-password)-->
                          <div class="form-group">
                              <label for="password" class="col-md-3 control-label">Password</label>
                              <div class="col-md-9">
                                  <input type="password" class="form-control" name="passwd" id="signup-password"
                                  placeholder="Password" oninput="setCustomValidity('')" onblur="onBlurDeInputs(this.id)"
                                  oninvalid="setCustomValidity('Campo obligatorio, debe contener mínimo 7 caracteres, 1 número y una letra en mayúsculas')"
                                  pattern="^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9]).{6,})\S$"
                                  maxlength="12" required>
                              </div>
                          </div>

                          <!-- Confirm Password (id:signup-cpassword)-->
                          <div class="form-group">
                              <label for="Cpassword" class="col-md-3 control-label"> Confirm Password</label>
                              <label for="match" style="display: none; color: red;"
                                id="signup-clabel">
                                  Confirmation doesn't match!
                              </label>
                              <div class="col-md-9">
                                  <input type="password" class="form-control" name="Cpasswd" id="signup-cpassword"
                                  placeholder="Password confirmation" oninput="setCustomValidity('')" onblur="onBlurDeInputs(this.id)"
                                  oninvalid="setCustomValidity('Campo obligatorio')"
                                  pattern="^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9]).{6,})\S$"
                                  maxlength="12" required>
                              </div>
                          </div>

                          <!-- News -->
                          <div class="input-group">
                                    <div class="checkbox">
                                      <label>
                                        <input id="news" type="checkbox" name="news" value="1">Receive News!
                                      </label>
                                    </div>
                          </div>

                          <!-- Button -->
                          <div class="form-group">
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
