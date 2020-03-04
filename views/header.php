<!DOCTYPE html>
<html>

<head>
    <title>
        <?php
            if(empty($title)) {
                echo "Min sida!";
            }
            else {
                echo $title;
            }
        ?>
    </title>

    <link href="css/main.css" type="text/css" rel="stylesheet" />
    <script src="js/main.js"></script>
</head>
<body>
<h1>PHP-sidan!</h1>

<a href="index.php">Flöde</a> | <a href="index.php?page=about">Om oss</a> 
<?php

$loggedInUser = (isset($_SESSION['username']) ? $_SESSION['username'] : '');
if(empty($_SESSION['username'])) {
    echo "<a href='index.php?page=login'>Logga in</a>";
}
else {
    echo "<a href='handlers/logout.php'>Logga ut</a>";
}

?>
<!-- <a href="index.php">Start</a> | <a href="views/about.php">Om oss</a> | <a href="views/loginForm.php">Logga in</a> -->