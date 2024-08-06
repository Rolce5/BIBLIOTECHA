<?php 
    
    class Book{
        private $db;
        public function __construct($db){
            $this->db = $db;
        }

        public function getAllBook(){
            $stmt = $this->db->query("SELECT * FROM books");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function addBook($isbn, $authorid, $title, $bookid, $image, $publication, $genreid, $nocopies, $descriptions){
            $stmt = $this->db->prepare("INSERT INTO books (isbn, authorid, title, bookid, image, publication, genreid, nocopies, descriptions) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $success = $stmt->execute([$isbn, $authorid, $title, $bookid, $image, $publication, $genreid, $nocopies, $descriptions]);

            return $success;
        }

        public function getBookById($id){
            $stmt = $this->db->prepare("SELECT * FROM books WHERE id = ?");

            $stmt->execute([$id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        
        public function updateBook($id, $isbn, $authorid, $title, $bookid, $image, $publication, $genreid, $nocopies, $descriptions){
            $stmt = $this->db->prepare("UPDATE books SET isbn = ?, authorid = ?, title = ?, bookid = ?, image = ?, publication = ?, genreid = ?, nocopies = ?, descriptions = ? WHERE id = ?");

            $success = $stmt->execute([$isbn, $authorid, $title, $bookid, $image, $publication, $genreid, $nocopies, $descriptions, $id]);

            return $success;
        }

        public function deleteBook($id){
            $stmt = $this->db->prepare("DELETE FROM books WHERE id = ?");

            $success = $stmt->execute([$id]);

            return $success;
        }
    }
?>