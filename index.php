<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/tobiascss.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,700i&display=swap" rel="stylesheet">
</head>




<?php
    session_start();
    $page = (isset($_GET['page']) ? $_GET['page'] : '');


$loggedInUser = (isset($_SESSION['username']) ? $_SESSION['username'] : '');
if(empty($_SESSION['username'])) {
    include("views/header.php");

    echo "<div id='app'>";
        echo "<h2 class='register-notice'>Please login to see posts</h2>";

}
else {
    if(isset($_SESSION['role']) && $_SESSION['role'] == "admin") {

        // ADMIN
        include("views/header.php");
        echo "<div id='app'>";
            // Lägg in flödet
        include("views/flow.php");
    } else {

        // USER
        include("views/header.php");
        echo "<div id='app'>";
            // Lägg in flödet
        include("views/flow.php");
    }
}






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
 else if($page == "flow") {
    include("views/flow.php");
}
 else if($page == "admin_panel") {
    include("views/admin_panel.php");
}
 else if($page == "error") {
     echo "Incorrect username or passsword";
    // include("views/loginForm.php");
}

$registerState = (isset($_GET['register']) ? $_GET['register'] : '');

if ($registerState == "success") {
    echo "Registration successful!";
}

?>

</div> <!-- app closes -->

