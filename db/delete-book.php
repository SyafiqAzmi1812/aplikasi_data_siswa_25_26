<?php

require 'connection.php';
$id = $_GET['id'];

$sql2 = "DELETE FROM books WHERE id=$id";

if($connection->query($sql2)) {
    header("Location: ../book.php");
    $connection->close();
    die();
}

echo "ERROR" . $sql2 . "<br>" . $connection_error;
$connection->close();
?>