<?php
session_start();
if (isset($_SESSION['logueado']) and $_SESSION['logueado']) {
$_SESSION['logueado'] = false;
unset($_SESSION['userid']);
}
header('Location: index.php');
exit;
?>
