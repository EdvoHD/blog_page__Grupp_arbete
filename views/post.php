<!doctype html>
<html>
<head>
    <title>Bloggsidan!</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="post-wrapper">
        

    <div class="back-btn">
        <a href="../index.php"> <- Go back</a>
    </div>

<?php
include("../db/db.php");
include("../classes/gbposts.php");

session_start();
    // hämtar värden ifrån posts
    $post_query = "SELECT id, title, content, image, category, created FROM posts WHERE id={$_GET['id']}";
    $result = $dbh->query($post_query);

    
    // Loopar ut infon ifrån $post_query som $post. Skapar upp alla divar för post.php sidans struktur. 
    // 
    foreach($result->fetchAll(PDO::FETCH_ASSOC) as $post) {
        $img = $post['image'];
        $imgAlt = $post['title'];

        echo "<div class='post-buttons'>";
         // Checkar ifall du är admin och då har du möjlighet att ta bort & redigera posts
         if (isset($_SESSION['role']) && $_SESSION['role'] == "admin") {
                echo "<a href=\"../handlers/delete_post.php?action=delete&post_id=" . $post['id'] . "\">Delete!</a>";
                echo " | ";
                echo "<a href=\"edit_postForm.php?post_id=" . $post['id'] . "\">Edit!</a>";
            }
        echo "</div>";
        echo "<div class='post-container'>";

        echo "<h1> " . $post['title'] . "<span class='post-created'> " . $post['created'] . " </span> </h1>";
        echo "<div class='post-content-container'>";
        echo "<div class='post-image'><img src='../images/$img' alt='$imgAlt'></div>";
        echo "<p>" . $post['content'] . "</p>";
        echo "</div>";


        echo "</div>";

        echo "<div class='comment-section'>";
        echo "<h2 class='comment-title'> Comments </h2>";
        


        echo "</p>";
    }
    // Join commens & users för att kunna visa både vilka kommentarer som skrivits men även ifrån vilken användare.
    // Och då joinar vi dessa tabeller så inte bara USERID med en siffra visas utan det faktiska användarnamnet som skapats i registeringsprocessen
    $join_query = "SELECT comments.id, content, comments.created, postId, userId, users.username FROM comments JOIN users on users.id = comments.userId WHERE postId = {$_GET['id']}";
    $result = $dbh->query($join_query);

    if($result != false) {
        // Loopar ut alla kommentarer för det specifika inlägget.
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

    // Formulär för att skapa en kommentar
?>
    <form class="comment-form" method="POST" action="../handlers/create_comment.php?post_id=<?php echo $_GET['id']; ?>">
    <h4>Create a comment:</h4>
    <textarea rows="5" cols="50" name="content" placeholder="write your comment.."></textarea><br />
    <input class='cta-btn' type="submit" value="Comment!" />
    </form>

    </div>
</body>
</html>