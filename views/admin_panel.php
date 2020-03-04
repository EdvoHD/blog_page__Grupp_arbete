<div class="create-post">
    <form action="handlers/create_post.php" method="POST">
        <input type="text" name="title" placeholder="Titel.." required />
        <textarea name="content" placeholder="Skriv ditt inlägg.." required></textarea>
        <select id="" name="category" required>
            <option value="1">kategori 1</option>
            <option value="2">kategori 2</option>
            <option value="3">kategori 3</option>
            <option value="4">kategori 4</option>
        </select>
        <input type="file" name="image" required> <!-- gör om till "choose file from directory" --> 

        <input type="submit" value="Skapa Inlägg">
    </form>
</div>
