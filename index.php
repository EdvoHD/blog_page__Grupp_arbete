<head>
    <link rel="stylesheet" href="css/main.css">
</head>

<?php
    session_start();
    $loggedInUser = (isset($_SESSION['username']) ? $_SESSION['username'] : '');
    if(empty($_SESSION['username'])) {
        echo "Please register to view the posts & comments!";
        include("views/header.php");
    }
    else {
        if(isset($_SESSION['role']) && $_SESSION['role'] == "admin") {
    
            // ADMIN
            include("views/adminLoggedIn.php");
                // Lägg in flödet
            include("views/flow.php");
        } else {
    
            // USER
            include("views/userLoggedIn.php");
                // Lägg in flödet
            include("views/flow.php");
        }
    }


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
 else if($page == "flow") {
    include("views/flow.php");
}
 else if($page == "admin_panel") {
    include("views/admin_panel.php");
}
 else if($page == "error") {
     echo "Incorrect username or passsword";
    include("views/loginForm.php");
}

$registerState = (isset($_GET['register']) ? $_GET['register'] : '');

if ($registerState == "success") {
    echo "Registration successful!";
}

?>



<?php
include("views/footer.php");
?>