<!doctype html>
<html>
<head>
<title>Bloggsidan!</title>
</head>
<body>

<h1>Bloggsidan!</h1>

<?php
include("../db/db.php");

    $post_query = "SELECT id, title, content, image,category, created FROM posts WHERE id={$_GET['id']}";
    $result = $dbh->query($post_query);

    foreach($result->fetchAll(PDO::FETCH_ASSOC) as $post) {
        echo "<p>";

        echo "<h1>{$post['title']} | {$post['created']}</h1>";
        echo "<h3>". utf8_encode($post['content']) ."</h3>";



        echo "</p>";
    }

    $comment_query = "SELECT id, postId, userId, comment FROM comments WHERE postId={$_GET['id']}";
    $result = $dbh->query($comment_query);

    if($result != false) {

        foreach($result->fetchAll(PDO::FETCH_ASSOC) as $post) {
            echo "<pre>";
            print_r($post);



            echo "</pre>";
        }

    } else {
        echo "error!";
    }

    session_start();

?>

<form method="POST" action="../handlers/create_comment.php?post_id=<?php echo $_GET['id']; ?>">
Kommentar:<br />
<textarea rows="20" cols="200" name="comment_to_save"></textarea><br />
<input type="submit" value="Posta din kommentar!" />
</form>




</body>
</html>