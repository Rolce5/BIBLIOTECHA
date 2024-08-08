<?php 
class PageController {
    public function index(){
        require 'views/home.php';
        
    }
    public function showCatalogue(){
        require 'views/catalogue.php';
    }
    public function showTransaction(){
        require 'views/transaction_details.php';
    }
    public function showContact(){
        require 'views/index.php';
    }
}