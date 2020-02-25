<?php
    include("../db/db.php");

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT id, username, password FROM register_user WHERE username ='$username' AND password = '$password'";

    $return = $dbh->query($query);

    //print_r($return->errorInfo());


    $row = $return->fetch(PDO::FETCH_ASSOC);
    
    if (empty($row)) {

        header("location:index.php?err=true");
        echo "du kan inte logga in!";

    } else {

        session_start();
        
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];

        header("location:index.php");
    }





    //print_r($return->fetch(PDO::FETCH_ASSOC));

    /*
    echo "<pre>";
        print_r($_POST);
    echo "</pre>";

    */

?>