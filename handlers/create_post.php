<?php


include("../db/db.php");


// $target_dir = "../images/";
// $target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["imageToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }

$title   = (!empty($_POST['title']) ? $_POST['title'] : "");
$content = (!empty($_POST['content']) ? $_POST['content'] : "");
$category = (!empty($_POST['category']) ? $_POST['category'] : "");
$image = $_FILES['file']['name'];

$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Om det är en image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Om den redan finns
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists." . "<br/>";
//     $uploadOk = 0;
// }
// Checkar storlek
if ($_FILES["file"]["size"] > 50000000) {
    echo "Sorry, your file is too large." . "<br/>";
    $uploadOk = 0;
}
// Checkar format
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed." . "<br/>";
    $uploadOk = 0;
}
// Inte ok
if ($uploadOk == 0) {
    echo "Your file was not uploaded.";
// Om ok, ladda upp. 
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    $query = "INSERT INTO posts (title, content, image, category) VALUES('$title', '$content', '$image', '$category');";
    $return = $dbh->exec($query);

    if($return) {
        print_r($return);
    }
    if(!$return) {
        print_r($dbh->errorInfo());
    } else {
        header("location:../index.php?funkar=yes");
    }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




// $query = "INSERT INTO posts (title, content, image, category ) VALUES('$title', '$content', '$image', '$category');";
// $return = $dbh->exec($query);

// if($return) {
//     print_r($return);
// }

// if(!$return) {
//     print_r($dbh->errorInfo());
// } else {
//     // header("location:../index.php?funkar=yes");
// }

?>