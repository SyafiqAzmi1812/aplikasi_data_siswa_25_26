<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'student_data_app';

$connection = new mysqli(
    $server,
    $username,
    $password,
    $db
);

if($connection->error) {
    die(" ERROR CONNECTION " . $connection->error);
}
?>