<?php 
class InventoryController {
    public function index(){
        require 'views/admin/inventory/index.php';
    }
    public function create(){
        require 'views/admin/inventory/create.php';
    }
    public function edit(){


        require 'views/admin/inventory/edit.php';
    }
}