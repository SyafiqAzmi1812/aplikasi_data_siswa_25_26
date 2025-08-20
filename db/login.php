<?php
session_start();
require "connection.php";

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == "" || $password == "" ) {
    $_SESSION["VALIDATION_INPUT"] = "All Field must be filled";
    header("Location: ../login.php");
    die();
}

//CEK EMAIL
$cekUser = "SELECT * FROM user WHERE email = '$email' ";
$user = mysqli_query($connection, $cekUser);

if($connection->query($cekUser)->num_rows == 0) {
    $_SESSION['VALIDATION_EMAIL_EXIST'] = "Email has not been register";
    header("Location: ../login.php");
    return;
}

//CEK PASSWORD
$auth = $user->fetch_assoc();
if(password_verify($password, $auth['password'])) {
    $_SESSION['AUTH_SUCCESS'] = "Login Succes";
    $_SESSION["is_login"] = true;
    header("Location: ../student.php");
    return;
}

$_SESSION['WRONG_PASSWORD'] = "Wrong password";
header("Location: ../login.php");
return;


?>