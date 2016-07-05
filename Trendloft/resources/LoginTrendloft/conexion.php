<?php
  $mysqli = new mysqli("127.0.0.1", "root", "", "wordpress", 3306);
  if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }      
?>  