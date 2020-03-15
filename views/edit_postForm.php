<?php
    
    include('../db/db.php');
    
    $post_id = $_GET['post_id'];
    
?>

<br />
<b>Update Post #<?php echo $post_id; ?>:</b><br />
<form action="../handlers/edit_post.php" method="POST">
<input type="text" name="title" placeholder="title here.." required /><br />
<textarea name="content" rows="10" cols="50" placeholder="content.." required></textarea><br />
<select id="" name="category" required>
    <option value="1">Category 1</option>
    <option value="2">Category 2</option>
    <option value="3">Category 3</option>
    <option value="4">Category 4</option>
</select>
<input type="file" name="image"> <!-- gör om här med -->
<input type="hidden" name="post_id" value=<?php echo $post_id; ?> /> <!-- <php echo $post_id; ?> -->
<br/>
<input type="submit" value="Update"/>


</form>

