<?php 

session_start();
$_SESSION = [];
session_unset();
session_destroy();

// tendang
header("Location: login.php");
exit;

 ?>