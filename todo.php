<?php
$title = "To Do | Home";
include "./template/header.php"; 
include "./db/data.php";
$no = 1
?>
    <h1>To Do List</h1>
    <a href="create-todo.php">Add Book</a>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>To Do</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($todos as $todo) : ?>
        <tr>
            <td> <?= $no++ ?></td>
            <td> <?= $todo['todos'] ?></td>
            <td>
                <a href="./db/delete-todo.php?id=<?= $todo['id'] ?>">Delete</a>
                <a href="update-todo.php?id=<?= $todo['id'] ?>">Update</a>
            </td>
        </tr>
                <?php endforeach ?>
        </tbody>
    </table>

</body>
</html>