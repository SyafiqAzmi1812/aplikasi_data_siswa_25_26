<?php

require 'connection.php';
$id = $_GET['id'];

$sql3 = "DELETE FROM todos WHERE id=$id";

if($connection->query($sql3)) {
    header("Location: ../todo.php");
    $connection->close();
    die();
}

echo "ERROR" . $sql3 . "<br>" . $connection_error;
$connection->close();
?>