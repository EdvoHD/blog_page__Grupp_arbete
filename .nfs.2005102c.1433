<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/tobiascss.css">
</head>

<div id="app">


<?php
    session_start();

$loggedInUser = (isset($_SESSION['username']) ? $_SESSION['username'] : '');
if(empty($_SESSION['username'])) {
    include("views/header.php");

    if(empty($_SESSION['role'])) {
        echo "<p class='register-notice'>Please login to view the posts & comments!</p>";
    }else {
        $roleCheck = $_SESSION['role'];
        echo "<p>Welcome $loggedInUser!</p>";
        echo "<span class='role-check'> $roleCheck</span>";
    }

}
else {
    if(isset($_SESSION['role']) && $_SESSION['role'] == "admin") {

        // ADMIN
        include("views/header.php");
        include("views/adminLoggedIn.php");
            // Lägg in flödet
        include("views/flow.php");
    } else {

        // USER
        include("views/header.php");
        include("views/userLoggedIn.php");
            // Lägg in flödet
        include("views/flow.php");
    }
}





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

</div> <!-- #app close -->

<?php
include("views/footer.php");
?>