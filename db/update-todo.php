<?php
require 'connection.php';

$id = $_POST['id'];

$todos = htmlspecialchars($_POST["todos"]);

$sql3 = "UPDATE todos SET todos='$todos' WHERE id=$id";

if($connection->query($sql3)) {
    header("Location: ../todo.php");
    $connection->close();
    die();
}

echo "ERROR" . $sql3 . "<br>" . $connection_error;
$connection->close();
?>