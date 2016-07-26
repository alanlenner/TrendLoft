<?php
  session_start();
  $photo = $_POST['picture'];

  if(isset($photo)){
    include('conexion.php');
    $sql = "SELECT * FROM imagen WHERE id = '$photo'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($result);

    $type = $row['tipo'];
    $nombreURL = $row['imageName'];
    $url = 'resources/images/galeria/'.$type.'/'.$nombreURL;

    unlink($url);

    $sql = "DELETE FROM imagen WHERE id = '$photo'";
    if ($stmt = mysqli_prepare($mysqli, $sql)) {
      mysqli_stmt_execute($stmt);
      $error_sql = mysqli_stmt_error($stmt);
      mysqli_stmt_close($stmt);
    }
    mysqli_close($mysqli);
    $_SESSION['borrado'] = TRUE;
  }
  else {
    $_SESSION['error'] = TRUE;
  }

  header("Location: http://localhost:8888/TrendLoft/Trendloft/deleteProduct.php");
?>
