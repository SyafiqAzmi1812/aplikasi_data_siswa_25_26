<?php
$title = "CREATE TODO LIST";
include "./template/header.php"
?>

<h1>Tambah To Do List</h1>
<a href="todo.php">Back</a>

<form 
style="margin-top: auto;"
method="POST"
action="./db/create-todo.php">
    <input name="todos" placeholder="Todo Name" /><br>
    <button type="submit">Submit</button>
</form>

</body>