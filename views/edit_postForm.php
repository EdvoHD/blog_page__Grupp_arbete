<?php
    
    include('../db/db.php');
    
    $post_id = $_GET['post_id'];

    // $a = "";
    // if(!empty($_GET['post_id'])) {
    //     $post_id = $_GET['post_id'];
    // }

    // if(!empty($_GET['action'])) {
    //     $a = $_GET['action']; 
    // }

    // if($a == "update") {
    //     echo "<pre>";
    //     print_r($_POST);
    //     echo "</pre>";
    //     echo "Updated";
    // }

    // $query = "SELECT id, title, content, image, category, created FROM posts WHERE id=$post_id;";
    // $return = $dbh->query($query);
    // if($return) {
    //     print_r($return);
    // }
    // if(!$return) {
    //     print_r($dbh->errorInfo());
    // }
    
?>

<br />
<b>Uppdatera inlägg #<?php echo $post_id; ?>:</b><br />
<form action="../handlers/edit_post.php" method="POST">
<input type="text" name="title" placeholder="title here.." required /><br />
<textarea name="content" rows="10" cols="50" placeholder="content.." required></textarea><br />
<select id="" name="category" required>
    <option value="1">kategori 1</option>
    <option value="2">kategori 2</option>
    <option value="3">kategori 3</option>
    <option value="4">kategori 4</option>
</select>
<input type="file" name="image"> <!-- gör om här med -->
<input type="hidden" name="post_id" value=<?php echo $post_id; ?> /> <!-- <php echo $post_id; ?> -->
<br/>
<input type="submit" value="Update"/>


</form>

