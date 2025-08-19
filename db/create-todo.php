<?php

require 'connection.php';

$todos = $_POST["todos"];

$sql3 = "INSERT INTO todos (todos)
        VALUES ('$todos')";

if($connection->query($sql3)) {
    header("Location: ../todo.php");
    $connection->close();
    die();
}

echo "ERROR" . $sql3 . "<br>" . $connection_error;
$connection->close();
?>