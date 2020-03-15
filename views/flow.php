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
    // // Hämtar de posts som finns i databasen in i en variabel $query
    // $query = "SELECT id, title, content, created FROM posts ORDER BY created $order";
    // $rows = $dbh->query($query);

    //     // Variabeln $rows är då $query när den är formaterad och i en array via query funktionen.  (HANTERBAR DATA)
    //     // Sen så hämtas all data ifrån arrayen ut via en while loop.
    // while ($row = $rows->fetch(PDO::FETCH_ASSOC)) {
    //     echo "<a class='flow-row' href='views/post.php?id={$row['id']}'>";
    //     echo "<div class=''>";
    //     echo "<h2>" . $row['title'] . "</h2>";
    //     echo "<p class='flow-post-created'>" . $row['created'] . "</p>";

    //     echo "</div></a>";
    // }

    // Här Används classes ovanför är 
    $Posts = new GBPost($dbh);

    $Posts->fetchAll();
    
    foreach ($Posts->getPosts(PDO::FETCH_ASSOC) as $test ) {
        echo "<a class='flow-row' href='views/post.php?id={$test['id']}'>";
        echo "<div class=''>";
        echo "<h2>" . $test['title'] . "</h2>";
        echo "<p class='flow-post-created'>" . $test['created'] . "</p>";

        echo "</div></a>";
    }
   


    ?>
</div>