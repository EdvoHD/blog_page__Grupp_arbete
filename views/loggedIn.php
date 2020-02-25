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
    echo "Välkommen $loggedInUser!";
    include ("userLoggedIn.php");
    echo "<a href='../index.php'>Start</a> | <a href='../index.php?page=about'>Om oss</a> | <a href='../handlers/logout.php'>Logga ut</a>";
}


?>



<?php
    include("footer.php");
?>