<?php
$title = "PHP-sidan | Start";
include("views/header.php");
?>

<p>Hej och välkommen hit! :)</p>

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

?>


<?php
include("views/footer.php");
?>