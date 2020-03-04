<head>
    <link rel="stylesheet" href="../css/main.css">
</head>

<div>
    <?php

    include("db/db.php");

    $flow_query = "SELECT id, title, content, image, category, created FROM posts";
    $result = $dbh->query($flow_query);

    foreach($result->fetchAll(PDO::FETCH_ASSOC) as $post) {
        echo "<br /><p>";
        echo "<h1><a href='views/post.php?id={$post['id']}'>{$post['title']} | {$post['created']}</a></h1>";
        echo "</p><br />";
    }

    ?>
</div>