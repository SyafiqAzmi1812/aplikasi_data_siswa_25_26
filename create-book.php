<?php
session_start();

$title = "CREATE BOOK DATA";
include "./template/header.php";

if (isset($_SESSION["is_login"]) == false ) {
    header("Location: login.php");
}
?>

<h1>Tambah Data Buku</h1>
<a href="index.php">Back</a>

<form 
style="margin-top: auto;"
method="POST"
action="./db/create-book.php">
    <input name="title" placeholder="Book Title" /><br>
    <input name="author" placeholder="Author Book"> <br>
    <button type="submit">Submit</button>
</form>

</body>