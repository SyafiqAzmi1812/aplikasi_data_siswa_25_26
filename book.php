<?php
session_start();

$title = "List Data Buku | Home";
include "./template/header.php"; 
include "./db/data.php";
$no = 1;

if (isset($_SESSION["is_login"]) == false ) {
    header("Location: login.php");
}
?>
    <h1>List Data Buku</h1>
    <a href="create-book.php">Add Book</a>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul Buku</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($books as $book) : ?>
        <tr>
            <td> <?= $no++ ?></td>
            <td> <?= $book['title'] ?></td>
            <td> <?= $book['author'] ?></td>
            <td>
                <a href="./db/delete-book.php?id=<?= $book['id'] ?>">Delete</a>
                <a href="update-book.php?id=<?= $book['id'] ?>">Update</a>
            </td>
        </tr>
                <?php endforeach ?>
        </tbody>
    </table>

</body>
</html>