<?php
include 'includes/header.php';
session_start();
if (isset($_SESSION["userName"])) {
    header("location:dashboard.php");
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-12 offset-md-4 mt-5 pt-5">
            <form method="POST" class="border border-info rounded p-4">
                <?php

                include 'classes/users.php';
                $user = new Users;
                if (isset($_POST["login"])) {
                    $userInfo = $_POST["userName"];
                    $pass = $_POST["pass"];
                    $user->login($userInfo, $pass);
                }
                ?>
                <div class="form-group mt-3">
                    <label for="userName">User Name</label>
                    <input type="text" class="form-control" name="userName" placeholder="Enter Name/Email/Phone">
                </div>
                <div class="form-group mt-3">
                    <label for="pass">Password</label>
                    <input type="text" class="form-control" name="pass" placeholder="Enter Your password">
                </div>
                <div class="form-group mt-3">
                    <button name="login" class="btn btn-info form-control">Login</button>
                </div>
                Don't have an Account? <a href="registration.php">Registration Here</a>
            </form>
        </div>
    </div>
</div>