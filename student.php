<?php
session_start();

$title = "Aplikasi Data Siswa | Home";
include "./template/header.php"; 
include "./db/data.php";
$no = 1;

if (isset($_SESSION["is_login"]) == false ) {
    header("Location: login.php");
}
?>
    <h1>Aplikasi Data Siswa</h1>
    <a href="create-student.php">Create Student</a>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Student Name</th>
                <th>Class</th>
                <th>Major</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($students as $student) : ?>
        <tr>
            <td> <?= $no++ ?></td>
            <td> <?= $student['full_nama'] ?></td>
            <td> <?= $student['classes'] ?></td>
            <td> <?= $student['major'] ?></td>  
            <td> <?= $student['gender'] ?></td>
            <td>
                <a href="./db/delete-student.php?id=<?= $student['id'] ?>">Delete</a>
                <a href="update-student.php?id=<?= $student['id'] ?>">Update</a>
            </td>
        </tr>
                <?php endforeach ?>
        </tbody>
        
    </table>

</body>
</html>