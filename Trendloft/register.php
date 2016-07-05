<?php include('header.php');?>

<link rel = "stylesheet" href="resources/css/Login.css">
<div class="wrapper">
  <form action="" method="post" class="login">
      <div><label>Email</label><input name="user" type="text" ></div>
      <div><label>Password</label><input name="password" type="password"></div>
      <div><label>Confirm Password</label><input name="Cpassword" type="password"></div>
      <div><input name="login" type="submit" value="login"></div>
  </form>
</div>

<?php include('footer.php');?>
