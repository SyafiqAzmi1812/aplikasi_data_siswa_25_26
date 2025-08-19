<?php

require 'connection.php';
$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id=$id";

if($connection->query($sql)) {
    header("Location: ../index.php");
    $connection->close();
    die();
}

echo "ERROR" . $sql . "<br>" . $connection_error;
$connection->close();
?>