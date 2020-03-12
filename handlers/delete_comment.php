<?php
    // Tar bort enstaka kommentar som matchar med id ifrån post
    include("../db/db.php");
    session_start();

    $postID = $_GET['post_id'];
    $commentID = $_GET['comment_id'];

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
    }

?>