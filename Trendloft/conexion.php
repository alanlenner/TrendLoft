<?php
  /* PC ALAN */
  
  $user = 'root';
  $password = '';
  $db = 'trendloft';
  $host = 'localhost';
  $port = 3306;
  /*
  /* PC JAVIER */
  /*
  $user = 'root';
  $password = 'root';
  $db = 'trendloft';
  $host = 'localhost';
  $port = 8889;
  */

  $mysqli = new mysqli($host, $user,$password, $db, $port);
if ($mysqli->connect_errno) {
  echo "Could not connect to server. (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>
