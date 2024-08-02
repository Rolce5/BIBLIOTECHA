<?php 
class BorrowedController {
    public function index(){
        require 'views/admin/borrowed/index.php';
    }
    public function create(){
        require 'views/admin/borrowed/create.php';
    }
    public function edit(){


        require 'views/admin/borrowed/edit.php';
    }
}