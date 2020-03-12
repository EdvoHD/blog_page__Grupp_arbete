<!doctype html>
<html>
<head>
    <title>Bloggsidan!</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="post-wrapper">
        

    <div class="back-btn">
        <a href="../index.php"> <- Gå tillbaka</a>
    </div>

<?php
include("../db/db.php");
include("../classes/gbposts.php");

session_start();

    $post_query = "SELECT id, title, content, image, category, created FROM posts WHERE id={$_GET['id']}";
    $result = $dbh->query($post_query);

    foreach($result->fetchAll(PDO::FETCH_ASSOC) as $post) {
        echo "<div class='post-buttons'>";
        echo "<a href=\"../handlers/delete_post.php?post_id=" . $post['id'] . "\">Delete!</a>";
        echo "<a href=\"edit_postForm.php?post_id=" . $post['id'] . "\">Edit!</a>";
        echo "</div>";
        echo "<div class='post-container'>";

        echo "<h1> " . $post['title'] . "<span class='post-created'> " . $post['created'] . " </span> </h1>";
        echo "<p>" . $post['content'] . "</p>";
        $img = $post['image'];
        $imgAlt = $post['title'];
        echo "<img src='../images/$img' alt='$imgAlt' height='300' width='auto'>";

        echo "</div>";

        echo "<div class='comment-section'>";
        echo "<h2> Comments </h2>";
         echo "<b>Name:</b> " . $post['title'] . "<br />";
         echo "<b>Message:</b><br /> " . $post['content'] . "<br />";
         echo "<b>Posted:</b> " . $post['created'] . "<br />";
         

        
         //Ändrat så bara admin kan edita och deleta

        if (isset($_SESSION['role']) && $_SESSION['role'] == "admin") {
        echo "<a href=\"handlePost.php?action=delete&id=" . $post['id'] . "\">Delete!</a>";
        echo " | ";
        echo "<a href=\"edit_postForm.php?post_id=" . $post['id'] . "\">Edit!</a>";
        echo "<hr />";
        }

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
            echo "<div class='comment-container'><p class='comment-username'>" . $post['username'] . ":</p> ";
            echo "<p class='comment-content'>" . $post['content'] . "</p>";
            echo "<form class='delete-comment-container' action='../handlers/delete_comment.php?post_id=". $post['postId'] . "&comment_id=" . $post['id']. "'method='POST'>";
           
            if ($post['username'] == $_SESSION['username'] || $_SESSION['role'] == "admin") {
            echo "<input type='submit' class='delete-btn' value='X'/>";
           } 
            echo "</form></div>";
        }

    } else {
        echo "error!";
    }

    echo "</div>"; // slut på comment-section


?>

    <form method="POST" action="../handlers/create_comment.php?post_id=<?php echo $_GET['id']; ?>">
    Kommentar:<br />
    <textarea rows="20" cols="200" name="content"></textarea><br />
    <input type="submit" value="Posta din kommentar!" />
    </form>

    </div>
</body>
</html>