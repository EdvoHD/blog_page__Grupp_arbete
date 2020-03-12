
<?php
include("../db/db.php");
    session_start();
    $user_id = $_SESSION['id'];
    $content = htmlspecialchars($_POST['content']);
    $post_id = $_GET['post_id'];


    $insertComment_query = "INSERT INTO comments (content, postId, userId) VALUES('$content', '$post_id', '$user_id');";
    $result = $dbh->exec($insertComment_query);

    if($result) {
        echo "Kommentaren är kommenterad!";
        header("location:../views/post.php?id=$post_id");
        //header("location:../views/post.php?post_id=$post_id");
    } else {
        echo "Något blev fel!";
    }
?>