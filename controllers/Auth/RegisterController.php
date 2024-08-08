<?php 
class RegisterController {

    public function showRegisterForm(){

        require 'views/auth/register.php';
    }

    public function store($db){
       
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name =  $_POST["name"];
            $email =  $_POST["email"];
            $matricule =  $_POST["matricule"];
            $password =  $_POST["password"];

            if(!empty($name) || !empty($email) || !empty($matricule) || !empty($password)){
                $register = new Register($db);
                $success = $register->addRegister($name, $email, $matricule, $password);

                if($success){
                    header("Location: index.php?controller=Login&action=showLoginForm");
                } else {
                    die('Error storing name in the database');
                }
            }
            else{
                $error = "name is required";
                require 'views/auth/register.php';
            }
            
        }
    }
}