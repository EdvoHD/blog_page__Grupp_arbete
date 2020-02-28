<head>
    <link rel="stylesheet" href="../css/main.css">
</head>

<?php

    echo "Välkommen $loggedInUser!";

?>

<a href='index.php'>Flöde</a> |
<a href='index.php?page=about'>Om oss</a> |
<a href='handlers/logout.php'>Logga ut</a> |
<a href="adminLoggedIn.php?page=adminpanel">Admin Panel</a>

<div>
    <marquee scrollamount='30' onbounce>
        <h1>DU ÄR INLOGGAD!</h1>
    </marquee>
</div>