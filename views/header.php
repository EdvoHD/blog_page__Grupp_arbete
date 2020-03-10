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
<h1>Welcome!</h1>

<a href="index.php">Feed</a> | <a href="index.php?page=about">About us</a> 
<?php

$loggedInUser = (isset($_SESSION['username']) ? $_SESSION['username'] : '');
if(empty($_SESSION['username'])) {
    echo "<a href='index.php?page=login'>Login</a>";
}
else {
    echo "<a href='handlers/logout.php'>Logout</a>";
}

?>
<!-- <a href="index.php">Start</a> | <a href="views/about.php">Om oss</a> | <a href="views/loginForm.php">Logga in</a> -->