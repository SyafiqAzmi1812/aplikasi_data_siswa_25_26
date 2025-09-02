<?php

session_start();
session_destroy();
$_SESSION['LOGOUT'] = "Logout Success";
header("Location: ../login.php");
?>