<?php
  /* PC ALAN */
  /*/
  $user = 'root';
  $password = '';
  $db = 'trendloft';
  $host = 'localhost';
  $port = 3306;
  /**/
  /* PC JAVIER */
  /**/
  $user = 'root';
  $password = 'root';
  $db = 'trendloft';
  $host = 'localhost';
  $port = 8889;
  /**/

  $link = mysql_connect("$host:$port", $user, $password) or die('Could not connect to server.' );
  $db_selected = mysql_select_db($db, $link)or die('Could not select database.');
?>
