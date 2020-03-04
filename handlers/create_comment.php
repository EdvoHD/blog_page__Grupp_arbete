
<?php
include("../db/db.php");
    session_start();
    $comment_query = "INSERT INTO comments (content, userId, postId) VALUES('{$_POST['comment_to_save']}','{$_SESSION['userId']}','{$_GET['postId']}');";
    $result = $dbh->exec($comment_query);

    if($result) {
        echo "Kommentaren är kommenterad!";
    } else {
        echo "Något blev fel!";
    }
?>