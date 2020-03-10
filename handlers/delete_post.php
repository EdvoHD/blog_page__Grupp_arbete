<?php

    include("../db/db.php");
    session_start();
    $postID = $_GET['post_id'];
    echo "postID: $postID";

    // SELECTA alla kommentarer ifrån en post
    $query = "SELECT comments.id, comments.postId FROM comments JOIN posts on posts.id = comments.postId WHERE postId = $postID";
     // JOIN users on users.id = comments.userId WHERE postId = {$_GET['id']}
    $result = $dbh->query($query);
    $test = $result->fetchAll(PDO::FETCH_ASSOC);
    $count = count($test);
    if ($count > 0) {

        // Ta bort alla kommentarer
        echo "NOT EMPTY";
        $remove_comments = "DELETE FROM comments WHERE postId = $postID";
        $result = $dbh->exec($remove_comments);

        if ($count > 0) {
            $remove_post = "DELETE FROM posts WHERE id = $postID";
            $result = $dbh->exec($remove_post);
        }

        header("location:../index.php");

        // Lägg till en till if sats som ser till att ta bort post efter man har tagit bort alla kommentarer
        
    } else {

        // Ta bort posts
        echo "ITS EMPTY";
        $remove_post = "";

    }

    //$testvin = $result->fetchAll(PDO::FETCH_ASSOC);
     
    /*
    if (empty($row)) {
        echo "hoppsan! Den var tom.";

    } else {
        // echo $row['postId'];
        // header("location:../views/loggedIn.php");
    }

    */
    // $ank_query = "SELECT comments.id, content, comments.created, postId, userId, users.username FROM comments JOIN users on users.id = comments.userId WHERE postId = {$_GET['id']}";


    // Ta bort alla kommentarer innan man tar bort posten


    // Ta bort posten


?>