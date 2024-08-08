<?php 

    class register{
        private $db;
        public function __construct($db){
            $this->db = $db;
        }
        
        public function addRegister($name, $email, $matricule, $password){
            $stmt = $this->db->prepare("INSERT INTO registers (name, email, matricule, password) VALUES (?, ?, ?, ?)");

            $success = $stmt->execute([$name, $email, $matricule, $password]);

            return $success;
        }
    }
?>