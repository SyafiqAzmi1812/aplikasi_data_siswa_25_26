<?php
require 'connection.php';

$id = $_GET['id'];

$sql2 = "SELECT * FROM books WHERE id=$id";

$books = mysqli_query($connection, $sql2);

$connection->close();
?>