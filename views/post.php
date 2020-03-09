<!doctype html>
<html>
<head>
<title>Bloggsidan!</title>
</head>
<body>

    <div class="back-btn">
        <a href="../index.php">Gå tillbaka</a>
    </div>

<?php
include("../db/db.php");
include("../classes/gbposts.php");

session_start();

    $post_query = "SELECT id, title, content, image, category, created FROM posts WHERE id={$_GET['id']}";
    $result = $dbh->query($post_query);

    foreach($result->fetchAll(PDO::FETCH_ASSOC) as $post) {
        echo "<p>";

        //echo "<h1>{$post['title']} | {$post['created']}</h1>";
        //echo "<h3>". utf8_encode($post['content']) ."</h3>";

         echo "<b>Name:</b> " . $post['title'] . "<br />";
         echo "<b>Message:</b><br /> " . $post['content'] . "<br />";
         echo "<b>Posted:</b> " . $post['created'] . "<br />";
        echo "<a href=\"handlePost.php?action=delete&id=" . $post['id'] . "\">Delete!</a>";
        echo " | ";
        echo "<a href=\"handlePost.php?action=edit&id=" . $post['id'] . "\">Edit!</a>";
        echo "<hr />";


        echo "</p>";
    }

    //$comment_query = "SELECT id, content, created, postId, userId FROM comments WHERE postId={$_GET['id']}";
    //$comment_query = "SELECT comments.id, comments.content, created, postId, userId FROM comments JOIN users on users.id = comments.usersID WHERE postId= $post_id ORDER BY date $this->order WHERE postId={$_GET['id']}";
    //$carl_query = "SELECT comments.id, content, date, postId, userId, users.username FROM comments JOIN users on users.id = comments.userId WHERE postId={$_GET['id']}";
$ank_query = "SELECT comments.id, content, comments.created, postId, userId, users.username FROM comments JOIN users on users.id = comments.userId WHERE postId = {$_GET['id']}";
    // /* ORDER BY date $this->order */ 
    $result = $dbh->query($ank_query);

    if($result != false) {

        foreach($result->fetchAll(PDO::FETCH_ASSOC) as $post) {
            echo "<div class='testvin'>" . $post['username'] . ": ";
            echo "<span>" . $post['content'] . "</span>";
            echo "<form action='../handlers/delete_comment.php?post_id=". $post['postId'] . "&comment_id=" . $post['id']. "'method='POST'>";
            echo "<input type='submit' class='delete-btn' value='X'/>";
            echo "</form></div>";
        }

    } else {
        echo "error!";
    }


?>

<form method="POST" action="../handlers/create_comment.php?post_id=<?php echo $_GET['id']; ?>">
Kommentar:<br />
<textarea rows="20" cols="200" name="content"></textarea><br />
<input type="submit" value="Posta din kommentar!" />
</form>




</body>
</html>