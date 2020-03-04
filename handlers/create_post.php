<?php


include("../db/db.php");

$title   = (!empty($_POST['title']) ? $_POST['title'] : "");
$content = (!empty($_POST['content']) ? $_POST['content'] : "");
$category = (!empty($_POST['category']) ? $_POST['category'] : "");
$image = (!empty($_POST['image']) ? $_POST['image'] : "");


$query = "INSERT INTO posts (title, content, image, category ) VALUES('$title', '$content', '$image', '$category');";
$return = $dbh->exec($query);

if($return) {
    print_r($return);
}

if(!$return) {
    print_r($dbh->errorInfo());
} else {
    header("location:../index.php?funkar=yes");
}



?>