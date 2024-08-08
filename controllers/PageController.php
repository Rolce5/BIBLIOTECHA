<?php 
class PageController {
    public function index(){
        require 'views/home.php';
    }
    public function showTransaction(){
        require 'views/transaction_details.php';
    }
}