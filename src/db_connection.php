<?php
class db_connection {
    protected $db_host = 'localhost';
    protected $db_user = 'root';
    protected $db_pass = '';
    protected $db_name = 'db_name';

    public function connection() {
        try {
            $conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}