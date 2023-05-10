<?php
include "../database.php";
?>

<?php

class room_class {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }


    public function show_room() {
        $query = "SELECT image FROM image_vid WHERE room_id = 1";
        $result = $this->db->insert($query);
        echo $result;
        return $result;
    }
}

?>
