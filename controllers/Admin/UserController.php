<?php 
class UserController {
    public function index(){
        require 'views/admin/user/index.php';
    }
    public function create(){
        require 'views/admin/user/create.php';
    }
    public function edit(){


        require 'views/admin/user/edit.php';
    }
}