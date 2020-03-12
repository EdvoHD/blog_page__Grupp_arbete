<!DOCTYPE html>
<html>

<head>
    <title>
        Blog
    </title>

    <link href="css/main.css" type="text/css" rel="stylesheet" />
    <script src="js/main.js"></script>
</head>
<body>

<div class="navbar">
    <div class="navbar-container">
        <div class="nav-icon">
            <img src="images/headerLogo.png" alt="nope">
        </div>
        <div class="nav-items">
            <a href="index.php">Feed</a>
            <a href="index.php?page=about">About us</a>
            <a href="index.php?page=contactForm">Contact</a>
            <?php 
                if(isset($_SESSION['role']) && $_SESSION['role'] == "admin") {
                    echo "<a href='index.php?page=admin_panel'>Admin Panel</a>";
                }
            ?>
        </div>
        <div class="nav-login">

<?php

$loggedInUser = (isset($_SESSION['username']) ? $_SESSION['username'] : '');
if(empty($_SESSION['username'])) {
    include("loginForm.php");
    
    echo "</div>";
}
else {
    echo "<a style='color:#f74f43;' href='handlers/logout.php'>Logout</a>";
    echo "</div>";
}
echo "</div></div>"; /* stänger navbar */
?>