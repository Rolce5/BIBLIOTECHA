<?php 
class ReservationController {
    public function index(){
        require 'views/admin/reservation/index.php';
    }
    public function create(){
        require 'views/admin/reservation/create.php';
    }
    public function edit(){


        require 'views/admin/reservation/edit.php';
    }
}