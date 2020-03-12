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

    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
</head>
<body>
    <div class="headerContainer">
        <a href=""><img src="images/headerLogo.png" alt="Logo"></a>
        <ul class="navbar">
            <li>
                <a href="index.php">Home</a> 
                <a href="index.php?page=about">About</a> 
                <a href="index.php?page=contactForm">Contact</a>
            </li>
        </ul>

        <form class="headerLogin" action="handlers/login.php" method="POST">
            <input type="text" name="username" placeholder="Username..." />
            <input type="password" name="password" placeholder="Password...">
            <button type="submit" value="SUBMIT">Login</button>
            <a href="index.php?page=signup">Signup</a>
        </form>

        <div class="loginOutBtn">
            <?php
                $loggedInUser = (isset($_SESSION['username']) ? $_SESSION['username'] : '');
                if(empty($_SESSION['username'])) {
                    echo "<a href='index.php?page=login'>Login</a>";
                }
                else {
                    echo "<a href='handlers/logout.php'>Logout</a> <br/>";
                    echo "Välkommen $loggedInUser!";
                }
            ?>
        </div>
            
        <div class="hamburgerMenu">
            <div id="hamburgerMenuIcon" onclick="onClickMenu()">
                <div id="bar1" class="bar"></div>
                <div id="bar2" class="bar"></div>
                <div id="bar3" class="bar"></div>
            </div>
            <ul class="hamburgerNavbar" id="hamburgerNavbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=contactForm">Contact</a></li>
            </ul>
        </div>
        <div class="hamburgerMenuBackground" id="hamburgerMenuBackground"></div>
        <script src="js/main.js"></script>
        <script src="js/test.js"></script>
    </div>
<!-- <a href="index.php">Start</a> | <a href="views/about.php">Om oss</a> | <a href="views/loginForm.php">Logga in</a> -->