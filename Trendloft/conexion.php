<?php

  $user = 'sexyfigu_trend';
  $password = 'lospollitosdicen';
  $db = 'sexyfigu_trendloft';
  $host = 'localhost';
  $port = 3306;


  $mysqli = new mysqli($host, $user,$password, $db, $port);
if ($mysqli->connect_errno) {
  //echo "Could not connect to server. (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>
