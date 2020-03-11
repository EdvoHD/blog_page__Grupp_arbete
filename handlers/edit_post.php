<?php 

include("../db/db.php");


$post_id = $_POST['post_id'];

$title   = $_POST['title'];
$content = $_POST['content'];
$category = $_POST['category'];
$image = $_POST['image'];


// $query = "UPDATE posts (title, content, image, category) SET ('$title', '$content', '$image', '$category') WHERE id = '$post_id';"
// $query = "UPDATE posts (title, content, image, category) SET ('$title', '$content', '$image', '$category') WHERE id='$post_id';";
// $query = "INSERT INTO posts (title, content, image, category) VALUE ('$title', '$content', '$image', '$category') WHERE id='$post_id';";
$query = "UPDATE posts SET title='$title', content='$content', category='$category', image='$image' WHERE id='$post_id';";
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