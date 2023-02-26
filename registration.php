<?php
include 'includes/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-12 offset-md-4 mt-5 pt-5">
            <form method="POST" class="border border-info rounded p-4">
                <div class="form-group mt-3">

                    <?php
                    include 'classes/users.php';
                    $users = new Users;
                    if (isset($_POST['signup'])) {
                        $users->registration($_POST);
                    }
                    ?>
                    <br>

                    <label for="userName">User Name</label>
                    <input type="text" class="form-control" name="userName" placeholder="Enter User Name">
                </div>
                <div class="form-group mt-3">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group mt-3">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
                </div>
                <div class="form-group mt-3">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" name="pass" placeholder="Enter Your password">
                </div>
                <div class="form-group mt-3">
                    <label for="cpass">Confirm Password</label>
                    <input type="password" class="form-control" name="cpass" placeholder="Confirm Your password">
                </div>
                <div class="form-group mt-3">
                    <button name="signup" class="btn btn-info form-control">Register</button>
                </div>
                Already have an Account? <a href="index.php">Login Here</a>
            </form>
        </div>
    </div>
</div>