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

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="btn btn-danger" class="navbar-brand" href="./db/logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="book.php">Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="todo.php">Todo</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container border mt-4 p-4">
    <h1 class="text-center">Aplikasi Data Siswa</h1>
    
    
    <div class="table mt-3">
    <table class="table table-stripped">
        <thead>
                <tr class="table-success">
                    <th class="table-warning">No.</th>
                    <th>Student Name</th>
                    <th class="table-warning">Class</th>
                    <th>Major</th>
                    <th class="table-warning">Gender</th>
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
                    <a class="btn btn-danger" href="./db/delete-student.php?id=<?= $student['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                    <a class="btn btn-warning" href="update-student.php?id=<?= $student['id'] ?>"><i class="fa-solid fa-edit"></i></a>
                </td>
            </tr>
                    <?php endforeach ?>
            </tbody>
            
        </table>
        <div class="mr-auto">
        <a class="btn btn-success" href="create-student.php">Create Student</a>
    </div>
    </div>

    </div>

<?php include "./template/footer.php" ?>