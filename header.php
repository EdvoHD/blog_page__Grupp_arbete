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
<a href="index.php">Start</a> | <a href="about.php">Om oss</a> | <a href="login.php">Logga in</a>
<hr />