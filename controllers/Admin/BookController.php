<?php 
class BookController {
    public function index(){
        require 'views/admin/books/index.php';
    }
    public function create(){
        require 'views/admin/books/create.php';
    }
    public function edit(){


        require 'views/admin/books/edit.php';
    }
}