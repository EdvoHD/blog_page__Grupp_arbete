
<div id="create-post">
    <div class="create-post-container">
        <h2>CREATE POST</h2>
    </div>
    <form action="handlers/create_post.php" method="POST" enctype="multipart/form-data">
        <div class="form-container">
            <input class='post-form-input' type="text" name="title" placeholder="Titel.." required />
            <textarea class='post-form-input' name="content" placeholder="Skriv ditt inlägg.." required></textarea>
            <select class='post-form-input' id="" name="category" required>
                <option value="1">kategori 1</option>
                <option value="2">kategori 2</option>
                <option value="3">kategori 3</option>
                <option value="4">kategori 4</option>
            </select>
            <input class='post-form-choose-file' type="file" name="file" required> <!-- gör om till "choose file from directory" --> 
        </div>
        <div class="button-container">
            <input class="cta-btn" type="submit" value="Create">
        </div>
    </form>
</div>
