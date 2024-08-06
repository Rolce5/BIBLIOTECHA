<?php 
    
    class book{
        private $db;
        public function __construct($db){
            $this->db = $db;
        }

        public function getAllBook(){
            $stmt = $this->db->query("SELECT * FROM book");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function addBook($isbn){
            $stmt = $this->db->prepare("INSERT INTO book (isbn) VALUES (?)");

            $success = $stmt->execute([$isbn]);

            return $success;
        }

        public function getBookById($id){
            $stmt = $this->db->prepare("SELECT * FROM book WHERE id = ?");

            $stmt->execute([$id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        
        public function updateBook($id, $isbn){
            $stmt = $this->db->prepare("UPDATE book SET isbn = ? WHERE id = ?");

            $success = $stmt->execute([$isbn, $id]);

            return $success;
        }

        public function deleteBook($id){
            $stmt = $this->db->prepare("DELETE FROM book WHERE id = ?");

            $success = $stmt->execute([$id]);

            return $success;
        }
    }
?>