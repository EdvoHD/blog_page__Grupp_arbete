<?php
    include("../db/db.php");


    if(isset($_SESSION['username'])) {
        echo "You are logged in you stoopid!";
    } else {
        echo " OOH YOU'RE NOT LOGGED IN STOOOPID!";
    }




    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT id, username, password, role FROM users WHERE username ='$username' AND password = '$password'";
    $return = $dbh->query($query);

    //print_r($return->errorInfo());


    $row = $return->fetch(PDO::FETCH_ASSOC);
     
    
    if (empty($row)) {

        header("location:../index.php?page=error");
        echo "du kan inte logga in!";

    } else {

        session_start();
        
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['role'] = $row['role'];
        header("location:../views/loggedIn.php");
    }





    //print_r($return->fetch(PDO::FETCH_ASSOC));

    /*
    echo "<pre>";
        print_r($_POST);
    echo "</pre>";

    */

?>