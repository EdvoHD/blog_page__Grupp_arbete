<?php

    include("../db/db.php");

    // failsafe
    if ($errors == true) {
        $errors == false;
        header("location:../index.php?page=signup");
        die();
    }

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

 
    $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password');";
    
// checkar användarnamnet
    
    $chk = "SELECT Username FROM users WHERE Username='$username';";
    $chk_res = $dbh->query($chk);
    $count = count($chk_res->fetchAll());
    if($count > 0){
        $errorMessages .= "användarnamnet finns redan <br />";
        $errors = true;
    } else {
        $return = $dbh->exec($query);
        if($return) {
            print_r($return);
        }
        if(!$return) {
            print_r($dbh->errorInfo());
        } else {
            header("location:../index.php");
        }
    }

// flyttat ned

    if($errors == true) {

        echo $errorMessages;
        header("location:../index.php?page=signup&error=true");
        die();
    }
?>
