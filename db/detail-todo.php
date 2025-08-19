<?php
require 'connection.php';

$id = $_GET['id'];

$sql3 = "SELECT * FROM todos WHERE id=$id";

$todos = mysqli_query($connection, $sql3);

$connection->close();
?>