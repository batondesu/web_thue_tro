<?php
include "../database.php";
?>

<?php

class room_class {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function insert_room($account_name) {
        $query = "INSERT IN accounts (name) VALUES ('$account_name')";
        $result = $this->db->insert($query);
        return $result;
    }

    public function show_room() {
        
    }
}

?>