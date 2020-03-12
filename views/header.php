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
            <img src="" alt="">
        </div>
        <div class="nav-items">
            <a href="index.php">Feed</a>
            <a href="index.php?page=about">About us</a>
            <a href="index.php?page=about">Contact</a>
        </div>
        <div class="nav-login">

<?php

$loggedInUser = (isset($_SESSION['username']) ? $_SESSION['username'] : '');
if(empty($_SESSION['username'])) {
    include("loginForm.php");
    
    echo "</div>";
}
else {
    echo "<a href='handlers/logout.php'>Logout</a>";
    echo "</div>";
}
echo "</div></div>"; /* stänger navbar */
?>
<!-- <a href="index.php">Start</a> | <a href="views/about.php">Om oss</a> | <a href="views/loginForm.php">Logga in</a> -->