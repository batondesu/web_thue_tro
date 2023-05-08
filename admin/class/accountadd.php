<?php
include "../database.php";
?>

<?php

class account {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function insert_account($account_name) {
        $query = "INSERT IN accounts (name) VALUES ('$account_name')";
        $result = $this->db->insert($query);
        return $result;
    }
}