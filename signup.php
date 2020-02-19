<?php

    include("db/db.php");

    $username = (!empty($_POST['username']) ? $_POST['username'] : "");
    $email    = (!empty($_POST['email']) ? $_POST['email'] : "");
    $password = (!empty($_POST['password']) ? md5($_POST['password']) : "");
    //$role     = (!empty($_POST['role']) ? $_POST['role'] : "");

    $errors = false;
    $errorMessages = "";

    if (empty($_POST['username'])) {
        $errorMessages .= "du måste skriva ett användarnamn! <br />";
        $errors = true;
    }

    if (empty($_POST['email'])) {
        $errorMessages .= "du måste skriva en email <br />";
        $errors = true;
    }

    if (empty($_POST['password'])) {
        $errorMessages .= "du måste skriva ett lösenord <br />";
        $errors = true;
    }

    if($errors == true) {
        echo $errorMessages;
        echo '<a href="index.php">Gå tillbaka</a>';
        die();
    }



    $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password');";
    $return = $dbh->exec($query);

    if($return) {
        print_r($return);
    }
    
    if(!$return) {
        print_r($dbh->errorInfo());
    } else {
        header("location:index.php");
    }


?>