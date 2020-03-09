<?php

    include("../db/db.php");
    session_start();
    $postID = 
    $comment_id = $_GET['id'];

    $query = "DELETE FROM comments WHERE id =:id";


?>