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

        // Checkar ifall den är tom efter första processen
        if ($count > 0) {
            $remove_post = "DELETE FROM posts WHERE id = $postID";
            $result = $dbh->exec($remove_post);
        }
        // Skickar en till index.php så man inte är kvar på posten som precis tagits bort.
        header("location:../index.php");

        
    } else {

        // Ta bort posts
        echo "ITS EMPTY";
        $remove_post = "DELETE FROM posts wHERE id = $postID";
        $result = $dbh->exec($remove_post);
        header("location:../index.php");

    }

?>