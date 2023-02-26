<?php
include 'includes/header.php';
session_start();
if (!isset($_SESSION['userName'])) {
    header("location:index.php");
}
?>
<div class="container">
    <div class="row">
        <h1 class="text-center bg-info">Dashboard</h1>
        <div class="col-md-6">
            <h2>
                <?php
                echo $_SESSION['userName']; ?> <br>
                <?php
                echo $_SESSION['email']; ?> <br>
                <?php
                echo $_SESSION['phone']; ?> <br>
                <?php
                echo $_SESSION['role']; ?> <br>
            </h2>
        </div>
        <div class="col-md-6">
            <?php
            if ($_SESSION["role"] == "admin") { ?>
                <a class="btn btn-secondary m-1" href="">Add Product</a><br>
                <a class="btn btn-secondary m-1" href="">Manage Product</a><br>
                <a class="btn btn-secondary m-1" href="">Registration</a><br>
                <?php
            }
            ?>
            <a class="btn btn-secondary m-1" href="">User Profile</a><br>
            <a class="btn btn-secondary m-1" href="">Add Catagory</a><br>

        </div>
    </div>
    <a class="btn btn-danger offset-6" href="logout.php">Logout</a>
</div>