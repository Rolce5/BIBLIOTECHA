<?php 
class PageController {
    public function index(){
        require 'views/home.php';
        
    }
    public function showCatalogue(){
        require 'views/catalogue.php';
    }
}