<?php 
class AuthorController {
    public function index(){
        require 'views/admin/author/index.php';
    }
    public function create(){
        require 'views/admin/author/create.php';
    }
    public function edit(){


        require 'views/admin/author/edit.php';
    }
}