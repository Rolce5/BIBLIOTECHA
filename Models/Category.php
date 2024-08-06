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

        public function getCategoryById($id){
            $stmt = $this->db->prepare("SELECT * FROM category WHERE id = ?");

            $stmt->execute([$id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        
        public function updateCategory($id, $name){
            $stmt = $this->db->prepare("UPDATE category SET name = ? WHERE id = ?");

            $success = $stmt->execute([$name, $id]);

            return $success;
        }

        public function deleteCategory($id){
            $stmt = $this->db->prepare("DELETE FROM category WHERE id = ?");

            $success = $stmt->execute([$id]);

            return $success;
        }
    }
?>