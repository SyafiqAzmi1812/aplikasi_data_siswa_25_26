<?php
session_start();
$title = "Aplikasi Data Siswa | LOGIN";
include "./template/header.php";

?>
<section class="container pt-2">
    <div class="card p-5">
        <h1>HALAMAN REGISTER</h1>

        <?php if (isset($_SESSION["VALIDATION_INPUT"])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION["VALIDATION_INPUT"] ?>
            </div>

        <?php
            session_unset();
        endif; ?>
        <?php if (isset($_SESSION["VALIDATION_INPUT"])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION["VALIDATION_INPUT"] ?>
            </div>

        <?php
            session_unset();
        endif; ?>

        <?php if (isset($_SESSION["VALIDATION_SUCCESS"])) : ?>
            <div class="alert alert-success" role="alert">
                <?= $_SESSION["VALIDATION_SUCCESS"] ?>
            </div>

        <?php
            session_unset();
        endif; ?>

        <?php if (isset($_SESSION["VALIDATION_EMAIL_EXIST"])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION["VALIDATION_EMAIL_EXIST"] ?>
            </div>

        <?php
            session_unset();
        endif; ?>


        <card>
            <form action="./db/register.php" method="post">
                <div class="mb-3">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input                                                                                                                                                                                                                                                                                                                                                                         
                    type="text"
                    class="form-control"
                    name="full_name"
                    placeholder="Please Input Your Full Name"
                    id="full_name"
                    aria-describedby="full_name">
                    <div id="full_name" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type
                    type="email"
                    class="form-control"
                    name="email"
                    placeholder="Please Input Your Email"
                    id="email"
                    aria-describedby="emailHelp2">
                    <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label">Password</label>
                    <input
                    type="password"
                    name="password"
                    placeholder="********"
                    class="form-control"
                    id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <p>Have an Account?
                    <a href="login.php">Login</a>
                </p>
            </form>
        </card>
</section>

<?php include "./template/footer.php"; ?>