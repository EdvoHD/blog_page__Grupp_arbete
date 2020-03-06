<?php 

class GBPosts {
    private $id;
    private $title;
    private $content;
    private $image;
    private $category;
    private $created;

        
    function __construct($id, $title, $content, $image, $category, $created) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->category = $category;
        $this->created = $created;
    }

    function allProducts() {
        echo "<h2 style='margin-top:32px; margin-bottom:0; padding:0;'>$this->name</h2> <br />";
        echo "<span>Pris: $this->price</span> <br />";
        echo "<span>Kategori: $this->category</span> <br />";
        echo "<span>Id: $this->articleId</span> <br />";
        echo "<span>Beskrivning: $this->description</span> <hr />";
        //echo "$this->name, $this->price, $this->category, $this->articleId, $this->description <br />";
    }

}
/*
$ProductOne = new Product("Jordnötssmör", 199, "livsmedel", 1, "Go och krämig");
$ProductTwo = new Product("Nötsmörsjordnöt", 599, "livsmedel", 2, "Rätt så äckligt");
$ProductThree = new Product("Hammare", 215, "verktyg", 3, "Hantverkares bästa vän!");

$ProductOne->allProducts();
$ProductTwo->allProducts();
$ProductThree->allProducts();
*/

?>