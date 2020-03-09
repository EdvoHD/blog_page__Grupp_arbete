<?php

    include("../db/db.php");
    session_start();


    $postID = $_GET['post_id'];
    $commentID = $_GET['comment_id'];

    echo "$postID <br />";
    echo "$commentID<br />";

    $query = "DELETE FROM comments WHERE id = $commentID";
    $return = $dbh->exec($query);

    if($return) {
        print_r($return);
    }
    if(!$return) {
        print_r($dbh->errorInfo());
    } else {
        echo "fuck yeah, det lirade!";
        header("Location: ../views/post.php?id=$postID");
        //header("location:../index.php?page=login&register=success");
    }

?>