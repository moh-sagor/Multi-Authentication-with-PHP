<?php
include 'includes/header.php';
session_start();
if ($_SESSION["role"] != "admin") {
    header("location:dashboard.php");
}
?>


Add Product