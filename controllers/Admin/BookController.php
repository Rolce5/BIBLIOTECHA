<?php 

class BookController {
    public function index($db){
        $bookModel = new Book($db);
        $books = $bookModel->getAllBook();
        require 'views/admin/books/index.php';
    }

    public function create(){
        require 'views/admin/books/create.php';
    }

    public function store($db){
       
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $isbn =  $_POST["isbn"];
            $authorid =  $_POST["authorid"];
            $title =  $_POST["title"];
            $bookid =  $_POST["bookid"];
            $publication =  $_POST["publication"];
            $genreid =  $_POST["genreid"];
            $nocopies =  $_POST["nocopies"];
            $descriptions =  $_POST["descriptions"];

            if(!empty($isbn) || !empty($authorid) || !empty($title) || !empty($bookid) || !empty($publication) || !empty($genreid) || !empty($nocopies) || !empty($descriptions)){
                $book = new Book($db);
                $success = $book->addBook($isbn, $authorid, $title, $bookid, $publication, $genreid, $nocopies, $descriptions);

                if($success){
                    header("Location: index.php?controller=Book&action=index");
                } else {
                    die('Error storing entries in the database');
                }
            }
            else{
                $error = "Fill all entries";
                require 'views/admin/books/create.php';
            }
            
        }
    }
    public function destroy($db,$id){
        $bookModel = new Book($db);
        $book = $bookModel->deleteBook($id);
        header("Location: index.php?controller=Book&action=index");

    }
    public function edit($db, $id){
        $bookModel = new Book($db);
        $book = $bookModel->getBookById($id);

        require 'views/admin/books/edit.php';
    }

    public function update($db){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $bookId = $_POST['book_id'];
            $isbn =  $_POST["isbn"];
            $authorid =  $_POST["authorid"];
            $title =  $_POST["title"];
            $bookid =  $_POST["bookid"];
            $publication =  $_POST["publication"];
            $genreid =  $_POST["genreid"];
            $nocopies =  $_POST["nocopies"];
            $descriptions =  $_POST["descriptions"];

            if(!empty($authorid) || !empty($title) || !empty($bookid) || !empty($publication) || !empty($genreid) || !empty($nocopies) || !empty($descriptions || !empty($isbn))){
                $book = new Book($db);
                $success = $book->updateBook($bookId, $isbn, $authorid, $title, $bookid, $publication, $genreid, $nocopies, $descriptions);

                if($success){
                    header("Location: index.php?controller=Book&action=index");
                } else {
                    die('Error storing isbn in the database');
                }
            }
            else{
                $error = "isbn is required";
                require 'views/admin/books/create.php';
            }
            
        }

    }
}
