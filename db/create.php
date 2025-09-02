<?php

require 'connection.php';

$full_nama = htmlspecialchars($_POST["full_nama"]);
$gender = $_POST["gender"];
$classes = $_POST["classes"];
$major = $_POST["major"];

$sql = "INSERT INTO students (full_nama, gender, classes, major)
        VALUES ('$full_nama', '$gender', '$classes', '$major')";

if($connection->query($sql)) {
    $_SESSION['message'] = "students data has created succesfully";
    header("Location: ../student.php");
    $connection->close();
    die();
}

echo "ERROR" . $sql . "<br>" . $connection_error;
$connection->close();
?>