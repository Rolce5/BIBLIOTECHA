<?php 
class LoginController {
    public function showLoginForm(){
        
        require 'views/auth/login.php';
    }

    public function store($db){
       
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username =  $_POST["username"];
            $password =  $_POST["password"];

            if(!empty($username) || !empty($password)){
                $register = new Login($db);
                $success = $register->addLogin($username, $password);

                if($success){
                    header("Location: index.php?controller=Dashboard&action=index");
                } else {
                    die('Error storing name in the database');
                }
            }
            else{
                $error = "name is required";
                require 'views/auth/login.php';
            }
            
        }
    }
}