<?php 

class AuthorController {
    public function index($db){
        $authorModel = new Author($db);
        $authors = $authorModel->getAllAuthor();
        require 'views/admin/authors/index.php';
    }

    public function create(){
        require 'views/admin/authors/create.php';
    }

    public function store($db){
       
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $id =  $_POST["id"];
            $firstName =  $_POST["firstName"];
            $lastName =  $_POST["lastName"];
            $biography =  $_POST["biography"];
            $birthDate =  $_POST["birthDate"];
            $deadDate =  $_POST["deadDate"];

            if(!empty($id) || !empty($firstName) || !empty($lastName) || !empty($birthDate) || !empty($deadDate) || !empty($biography) ){
                $author = new Author($db);
                $success = $author->addAuthor($id, $firstName, $lastName, $birthDate, $deadDate, $biography);

                if($success){
                    header("Location: index.php?controller=Author&action=index");
                } else {
                    die('Error storing entries in the database');
                }
            }
            else{
                $error = "Fill all entries";
                require 'views/admin/authors/create.php';
            }
            
        }
    }
    public function destroy($db,$id){
        $authorModel = new Author($db);
        $author = $authorModel->deleteAuthor($id);
        header("Location: index.php?controller=Author&action=index");

    }
    public function edit($db, $id){
        $authorModel = new Author($db);
        $author = $authorModel->getAuthorById($id);

        require 'views/admin/authors/edit.php';
    }

    public function update($db){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $id =  $_POST["id"];
            $firstName =  $_POST["firstName"];
            $lastName =  $_POST["lastName"];
            $biography =  $_POST["biography"];
            $birthDate =  $_POST["birthDate"];
            $deadDate =  $_POST["deadDate"];


            if(!empty($id) || !empty($firstName) || !empty($lastName) || !empty($birthDate) || !empty($deadDate) || !empty($biography)){
                $author = new Author($db);
                $success = $author->updateAuthor($id, $firstName, $lastName, $birthDate, $deadDate, $biography);

                if($success){
                    header("Location: index.php?controller=Author&action=index");
                } else {
                    die('Error storing id in the database');
                }
            }
            else{
                $error = "id is required";
                require 'views/admin/authors/create.php';
            }
            
        }

    }
}

