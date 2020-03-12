<?php
    session_start();
    $loggedInUser = (isset($_SESSION['username']) ? $_SESSION['username'] : '');
    if(empty($_SESSION['username'])) {
        // echo "Var vänlig att registrera för att kunna se inläggen!";
    }
    else {
        echo "Välkommen $loggedInUser!";
    }

$title = "PHP-sidan | Start";
include("views/header.php");
?>


<?php

$page = (isset($_GET['page']) ? $_GET['page'] : '');

if($page == "about") {
    include("views/about.php");
}
else if($page == "contactForm") {
    include("views/contactForm.php");
}
 else if($page == "login") {
    include("views/loginForm.php");
}
 else if($page == "signup") {
    include("views/signupForm.php");
}

?>


<?php
include("views/footer.php");
?>