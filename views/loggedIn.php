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
}


?>



<?php
    include("footer.php");
?>