<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/tobiascss.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,700i&display=swap" rel="stylesheet">
</head>




<?php
    session_start();
    // hämtar in $_GET för url redan här för att användas senare.
    $page = (isset($_GET['page']) ? $_GET['page'] : '');

    // Kollar ifall man är inloggad eller inte. 
$loggedInUser = (isset($_SESSION['username']) ? $_SESSION['username'] : '');
if(empty($_SESSION['username'])) {
    // Om du inte är inloggad
    include("views/header.php");
    echo "<div id='app'>";
        echo "<h2 class='register-notice'>Please login to see posts</h2>";

}
    // Om du är inloggad
else {
    // Om du är inloggad & är admin
    if(isset($_SESSION['role']) && $_SESSION['role'] == "admin") {

        // ADMIN
        include("views/header.php");
        // Öppnar en div vid namn app här där all info ska loopas inuti.
        echo "<div id='app'>";
        include("views/flow.php");
    } else {

        // USER
        include("views/header.php");
        // Öppnar en div vid namn app här där all info ska loopas inuti.
        echo "<div id='app'>";
        include("views/flow.php");
    }
}




    // om du är på index sidan men klickat på en länk
    // Här redirectas du 

if($page == "about") {
    // Använder header här för att ta en till en ny sida istället för att include about sidan under alla inlägg (ser konstigt ut)
    header("location:views/about.php");
}
else if($page == "contactForm") {
    // Använder header här för att ta en till en ny sida istället för att include contactform sidan under alla inlägg (ser konstigt ut)
    header("location:views/contactForm.php");
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
    // om inloggning misslyckas
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

