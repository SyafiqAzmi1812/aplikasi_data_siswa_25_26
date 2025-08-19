<?php 
require 'connection.php';

$students = [];
$sql = "SELECT * FROM students";

$books = [];
$sql2 = "SELECT * FROM books";

$todos = [];
$sql3 = "SELECT * FROM todos";

$students = mysqli_query($connection, $sql);
$books = mysqli_query($connection, $sql2);
$todos = mysqli_query($connection, $sql3);
$connection->close();
?>