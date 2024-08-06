<?php 

    class Category{
        private $db;
        public function __construct($db){
            $this->db = $db;
        }

        public function getAllCategory(){
            $stmt = $this->db->query("SELECT * FROM categories");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function addCategory($name){
            $stmt = $this->db->prepare("INSERT INTO categories (name) VALUES (?)");

            $success = $stmt->execute([$name]);

            return $success;
        }

        public function getCategoryById($id){
            $stmt = $this->db->prepare("SELECT * FROM categories WHERE id = ?");

            $stmt->execute([$id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        
        public function updateCategory($id, $name){
            $stmt = $this->db->prepare("UPDATE categories SET name = ? WHERE id = ?");

            $success = $stmt->execute([$name, $id]);

            return $success;
        }

        public function deleteCategory($id){
            $stmt = $this->db->prepare("DELETE FROM categories WHERE id = ?");

            $success = $stmt->execute([$id]);

            return $success;
        }
    }
?>