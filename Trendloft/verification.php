<?php
  session_start();
  include('header.php');
  $codigo = $_GET['code'];
  $_SESSION['validado'] = 999999999;
  include('conexion.php');
  $sql = "UPDATE usuario SET code=".$_SESSION['validado']."WHERE code=".$codigo.";";
  if ($stmt = mysqli_prepare($mysqli, $sql)) {
    mysqli_stmt_execute($stmt);
    $error_sql = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
  }
  mysqli_close($mysqli);

  include('footer.php');
?>
