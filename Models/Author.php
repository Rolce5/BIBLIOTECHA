<?php 
    
    class Author{
        private $db;
        public function __construct($db){
            $this->db = $db;
        }

        public function getAllAuthor(){
            $stmt = $this->db->query("SELECT * FROM authors");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function addAuthor($id, $firstName, $lastName, $birthDate, $deadDate, $biography){
            $stmt = $this->db->prepare("INSERT INTO authors (id, firstName, lastName, birthDate, deadDate, biography) VALUES (?, ?, ?, ?, ?, ?)");

            $success = $stmt->execute([$id, $firstName, $lastName, $birthDate, $deadDate, $biography]);

            return $success;
        }

        public function getAuthorById($id){
            $stmt = $this->db->prepare("SELECT * FROM authors WHERE id = ?");

            $stmt->execute([$id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        
        public function updateAuthor($id, $firstName, $lastName, $birthDate, $deadDate, $biography){
            $stmt = $this->db->prepare("UPDATE authors SET firstName = ?, lastName = ?, birthDate = ?, deadDate = ?, biography = ? WHERE id = ?");

            $success = $stmt->execute([$firstName, $lastName, $birthDate, $deadDate, $biography, $id]);

            return $success;
        }

        public function deleteAuthor($id){
            $stmt = $this->db->prepare("DELETE FROM authors WHERE id = ?");

            $success = $stmt->execute([$id]);

            return $success;
        }
    }
?>