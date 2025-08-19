<?php
session_start();
$title = "Update BOOK DATA";
include "./template/header.php";
include "./db/detail-book.php";

if (isset($_SESSION["is_login"]) == false ) {
    header("Location: login.php");
}
?>

<h1>Update Data BOOK</h1>
<a href="book.php">Back</a>
<form
    style="margin-top: 10px;"
    method="POST"
    action="./db/update-book.php">

    <?php foreach ($books as $book) : ?>
        <input type="hidden" value="<?= $book['id'] ?>" name='id'>
        <input
            value="<?= $book['title'] ?>"
            name="title"
            placeholder="Title" /><br />
        <input
            value="<?= $book['author'] ?>"
            name="author"
            placeholder="Author" /><br />
    <?php endforeach ?>
    <button type="submit">Submit</button>
</form>

</body>

</html>
