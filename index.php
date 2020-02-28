<head>
    <link rel="stylesheet" href="css/main.css">
</head>

<?php
    session_start();
    $loggedInUser = (isset($_SESSION['username']) ? $_SESSION['username'] : '');
    if(empty($_SESSION['username'])) {
        echo "Var vänlig att registrera för att kunna se inläggen!";
        include("views/header.php");
    }
    else {
        $loggedInUser = (isset($_SESSION['username']) ? $_SESSION['username'] : '');

        if(isset($_SESSION['role']) && $_SESSION['role'] == "admin") {
    
            // ADMIN
            include("views/adminLoggedIn.php");
        } else {
    
            // USER
            include("views/userLoggedIn.php");
        }
    }

    $title = "PHP-sidan | Start";
?>


<?php

$page = (isset($_GET['page']) ? $_GET['page'] : '');

if($page == "about") {
    include("views/about.php");
}
 else if($page == "login") {
    include("views/loginForm.php");
}
 else if($page == "signup") {
    include("views/signupForm.php");
}
 else if($page == "error") {
     echo "Incorrect username or passsword";
    include("views/loginForm.php");
}

?>


<?php
include("views/footer.php");
?>