<?php
require 'connection.php';

$id = $_POST['id'];

$title = htmlspecialchars($_POST["title"]);
$author = $_POST["author"];

$sql2 = "UPDATE books SET title='$title', author='$author' WHERE id=$id";

if($connection->query($sql2)) {
    header("Location: ../book.php");
    $connection->close();
    die();
}

echo "ERROR" . $sql2 . "<br>" . $connection_error;
$connection->close();
?>