<a href='index.php'>Feed</a> |
<a href='index.php?page=about'>About us</a> |
<a href='handlers/logout.php'>Logout</a>

<?php

    $roleCheck = $_SESSION['role'];

    echo "<p>Welcome $loggedInUser!</p>";
    echo "<span class='role-check'>role: $roleCheck</span>";
?>

<div id="user-view">
</div>