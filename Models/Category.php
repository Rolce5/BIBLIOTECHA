<?php 

    class category{
        private $db;
        public function __construct($db){
            $this->db = $db;
        }

        public function getAllCategory(){
            $stmt = $this->db->query("SELECT * FROM category");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function addCategory($name){
            $stmt = $this->db->prepare("INSERT INTO category (name) VALUES (?)");

            $success = $stmt->execute([$name]);

            return $success;
        }
        public function deleteCategory($id){
            $stmt = $this->db->prepare("DELETE FROM category WHERE id = ?");

            $success = $stmt->execute([$id]);

            return $success;
        }
    }
?>