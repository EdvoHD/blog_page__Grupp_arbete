<a href='index.php'>Feed</a> |
<a href='index.php?page=about'>About us</a> |
<a href='handlers/logout.php'>Logout</a> |
<a href="index.php?page=admin_panel">Admin Panel</a>

<?php
    $roleCheck = $_SESSION['role'];

    echo "<p>Welcome $loggedInUser!</p>";
    echo "<span class='role-check'> $roleCheck</span>";
?>

<div id="admin-view">
</div>