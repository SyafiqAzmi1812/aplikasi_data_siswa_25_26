<?php

require 'connection.php';

$title = $_POST["title"];
$author = $_POST["author"];

$sql2 = "INSERT INTO books (title, author)
        VALUES ('$title', '$author')";

if($connection->query($sql2)) {
    header("Location: ../book.php");
    $connection->close();
    die();
}

echo "ERROR" . $sql2 . "<br>" . $connection_error;
$connection->close();
?>