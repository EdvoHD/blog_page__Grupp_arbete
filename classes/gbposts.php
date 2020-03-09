<?php
class GBPost {
    private $databaseHandler;
    //private $order = "desc";
    private $posts;

    public function __construct($dbh) {
        
        $this->databaseHandler = $dbh;

    }

    public function fetchAll() {
        $flow_query = "SELECT id, title, content, image, category, created FROM posts";
        //$query = "SELECT id, title, content, created FROM messages ORDER BY date_posted $this->order";

        $return_array = $this->databaseHandler->query($flow_query);
        $return_array = $return_array->fetchAll(PDO::FETCH_ASSOC);

        $this->posts = $return_array;
    }

    public function getPosts() {
        return $this->posts;
    }


}
?>