<head>
    <link rel="stylesheet" href="../css/main.css">
</head>

<div class="flow-container">
    <div class="bg-overlay">
    </div>
    <?php

    include("db/db.php");
    include("classes/gbposts.php");

    /*
    $flow_query = "SELECT id, title, content, image, category, created FROM posts";
    $result = $dbh->query($flow_query);

    foreach($result->fetchAll(PDO::FETCH_ASSOC) as $post) {
        echo "<br /><p>";
        echo "<h1><a href='views/post.php?id={$post['id']}'>{$post['title']} | {$post['created']}</a></h1>";
        echo "</p><br />";
    }
    */

    echo "<div style='z-index:2;'><h2> Feed <h2></div>";

    $Posts = new GBPost($dbh);

    $Posts->fetchAll();
   
    foreach( $Posts->getPosts() as $post ) {
        echo "<a class='flow-row' href='views/post.php?id={$post['id']}'>";
        echo "<h3>{$post['title']}</h3>";
        echo "<p class='flow-post-created'>{$post['created']}</p>";
        echo "</a>";
    }

    ?>
</div>