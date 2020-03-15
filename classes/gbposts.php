<?php




class GBPost {
    private $databaseHandler;
    //private $order = "desc";
    private $posts;

    public function __construct($dbh) {
        
        $this->databaseHandler = $dbh;

    }

    public function fetchAll() {

        // sätter en variabel för i vilken ordning posts ska visas
        $order = "desc";
        if (isset($_GET['order']) && $_GET['order'] == "ascending") {
            $order = "asc";
        }
        $flow_query = "SELECT id, title, content, created FROM posts ORDER BY created $order";

        $return_array = $this->databaseHandler->query($flow_query);
        $return_array = $return_array->fetchAll(PDO::FETCH_ASSOC);
        $this->posts = $return_array;
    }

    public function getPosts() {
        return $this->posts;
    }


}
?>