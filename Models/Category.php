<?php 

<<<<<<< HEAD
    class category{
=======
    class Category{
>>>>>>> princewill
        private $db;
        public function __construct($db){
            $this->db = $db;
        }

        public function getAllCategory(){
<<<<<<< HEAD
            $stmt = $this->db->query("SELECT * FROM category");
=======
            $stmt = $this->db->query("SELECT * FROM categories");
>>>>>>> princewill
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function addCategory($name){
<<<<<<< HEAD
            $stmt = $this->db->prepare("INSERT INTO category (name) VALUES (?)");
=======
            $stmt = $this->db->prepare("INSERT INTO categories (name) VALUES (?)");
>>>>>>> princewill

            $success = $stmt->execute([$name]);

            return $success;
        }

        public function getCategoryById($id){
<<<<<<< HEAD
            $stmt = $this->db->prepare("SELECT * FROM category WHERE id = ?");
=======
            $stmt = $this->db->prepare("SELECT * FROM categories WHERE id = ?");
>>>>>>> princewill

            $stmt->execute([$id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        
        public function updateCategory($id, $name){
<<<<<<< HEAD
            $stmt = $this->db->prepare("UPDATE category SET name = ? WHERE id = ?");
=======
            $stmt = $this->db->prepare("UPDATE categories SET name = ? WHERE id = ?");
>>>>>>> princewill

            $success = $stmt->execute([$name, $id]);

            return $success;
        }

        public function deleteCategory($id){
<<<<<<< HEAD
            $stmt = $this->db->prepare("DELETE FROM category WHERE id = ?");
=======
            $stmt = $this->db->prepare("DELETE FROM categories WHERE id = ?");
>>>>>>> princewill

            $success = $stmt->execute([$id]);

            return $success;
        }
    }
?>