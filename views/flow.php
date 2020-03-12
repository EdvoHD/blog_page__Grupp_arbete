<head>
    <link rel="stylesheet" href="../css/main.css">
</head>

<div class="flow-container">
    <div class="bg-overlay">
    </div>
    <?php

    include("db/db.php");
    include("classes/gbposts.php");


    echo "<div style='z-index:2;'><center> <h2> Feed </h2> </center> Sortering:  <a href='index.php?order=ascending'>Stigande</a>  |  <a href='index.php?order=descending'>Fallande</a> </center> </div>";
    
    $order = "desc";

    if (isset($_GET['order']) && $_GET['order'] == "ascending") {
        $order = "asc";
    }

    $query = "SELECT id, title, content, created FROM posts ORDER BY created $order";
    $rows = $dbh->query($query);


    while ($row = $rows->fetch(PDO::FETCH_ASSOC)) {
        echo "<a class='flow-row' href='views/post.php?id={$row['id']}'>";
        echo "<b>Name:</b> " . $row['title'] . "<br />";
        echo "<b>Message:</b><br /> " . $row['content'] . "<br />";
        echo "<b>Posted:</b> " . $row['created'] . "<br />";

        echo "</a>";
    }

    
    $Posts = new GBPost($dbh);

    $Posts->fetchAll();
   


    ?>
</div>