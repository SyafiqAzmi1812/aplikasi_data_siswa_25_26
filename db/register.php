<?php
session_start();
require "connection.php";

$full_name = htmlspecialchars($_POST['full_name']);
$email = $_POST['email'];
$password = $_POST['password'];

if (
    $full_name == "" ||
    $email == "" ||
    $password == "" 
) {
    $_SESSION["VALIDATION_INPUT"] = "All Field must be filled";
    header("Location: ../register.php");
    return;
}

//CEK EMAIL
$cekEmail = "SELECT email FROM user WHERE email = '$email' ";

if($connection->query($cekEmail)->num_rows > 0) {
    $_SESSION['VALIDATION_EMAIL_EXIST'] = "Email has already use";
    header("Location: ../register.php");
    return;
}

$password_hased = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO user(full_name, email, password) VALUE ('$full_name', '$email', '$password_hased')";

if($connection->query($sql)) {
    $_SESSION['REGISTER_SUCCESS'] = "Register succesfully, please login";
    header("Location: ../login.php");
    $connection->close();
    die();
}

$_SESSION["VALIDATION_SUCCESS"] = "Register success";
header("Location: ../register.php");
?>