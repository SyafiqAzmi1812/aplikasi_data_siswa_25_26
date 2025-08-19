<?php
require 'connection.php';

$id = $_POST["id"];

$full_nama = htmlspecialchars($_POST["full_nama"]);
$gender = $_POST["gender"];
$classes = $_POST["classes"];
$major = $_POST["major"];

$sql = "UPDATE students SET full_nama='$full_nama', gender='$gender', classes='$classes', major='$major' WHERE id=$id";

if($connection->query($sql)) {
    header("Location: ../index.php");
    $connection->close();
    die();
}

echo "ERROR" . $sql . "<br>" . $connection_error;
$connection->close();
?>