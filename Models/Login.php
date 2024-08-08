<?php 
    class login{
        private $db;
        public function __construct($db){
            $this->db = $db;
        }
        
        public function addLogin($username, $password){
            $stmt = $this->db->prepare("INSERT INTO logins (username, password) VALUES (?, ?)");

            $success = $stmt->execute([$username, $password]);

            return $success;
        }
    }
?>