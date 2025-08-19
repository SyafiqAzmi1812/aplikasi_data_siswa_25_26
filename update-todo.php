<?php
$title = "Update BOOK DATA";
include "./template/header.php";
include "./db/detail-todo.php";
?>

<h1>Update To Do List</h1>
<a href="todo.php">Back</a>
<form
    style="margin-top: 10px;"
    method="POST"
    action="./db/update-todo.php">

    <?php foreach ($todos as $todo) : ?>
        <input type="hidden" value="<?= $todo['id'] ?>" name='id'>
        <input
            value="<?= $todo['todos'] ?>"
            name="todos"
            placeholder="todo" /><br />
    <?php endforeach ?>
    <button type="submit">Submit</button>
</form>

</body>

</html>
