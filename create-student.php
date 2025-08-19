<?php
session_start();

$title = "CREATE STUDENT DATA";
include "./template/header.php";

if (isset($_SESSION["is_login"]) == false ) {
    header("Location: login.php");
}
?>

<h1>Tambah Data Siswa</h1>
<a href="index.php">Back</a>

<form 
style="margin-top: auto;"
method="POST"
action="./db/create.php">
    <input name="full_nama" placeholder="Full Name" /><br>
    <select name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br>
    <select name="classes">
        <option value="x">X</option>
        <option value="xi">XI</option>
        <option value="xii">XII</option>
    </select><br>
    <select name="major">
        <option value="pplg">PPLG</option>
        <option value="hr">HR</option>
        <option value="tjkt">TJKT</option>
        <option value="dkv">DKV</option>
        <option value="tkro">TKRO</option>
        <option value="tbsm">TBSM</option>
        <option value="tmp">TMP</option>
        <option value="mplb">MPLB</option>
    </select><br>
    <button type="submit">Submit</button>
</form>

</body>