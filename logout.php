<?php 
session_start();
session_unset();
session_destroy();
setcookie('username', '', 0, '/');
setcookie('fullname', '', 0, '/');
header('location:login.php');
?>