<head>
    <link rel="stylesheet" href="../css/main.css">
</head>

<?php 
include ("../db/db.php");
session_start();



if(empty($_SESSION['username'])) {
    echo "<p>Något gick fel!</p>";
    echo "<a href='../index.php?page=login'>Gå tillbaka och försök igen!</a>";
}
 else {
    $loggedInUser = (isset($_SESSION['username']) ? $_SESSION['username'] : '');

    if(isset($_SESSION['role']) && $_SESSION['role'] == "admin") {

        // ADMIN
        //include("adminLoggedIn.php");
        header("location:../index.php?login=yes");
    } else {

        // USER
        //include("userLoggedIn.php");
        header("location:../index.php?login=no");
    }
}

?>


<?php
    include("footer.php");
?>