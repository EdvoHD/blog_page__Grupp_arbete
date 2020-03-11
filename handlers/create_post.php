<?php


include("../db/db.php");


$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imageToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

$title   = (!empty($_POST['title']) ? $_POST['title'] : "");
$content = (!empty($_POST['content']) ? $_POST['content'] : "");
$category = (!empty($_POST['category']) ? $_POST['category'] : "");
$image = (!empty($_POST['imageToUpload']) ? $_POST['imageToUpload'] : "");


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