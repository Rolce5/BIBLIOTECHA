<?php 
class CategoryController {
    public function index($db){
        $categoryModel = new Category($db);
        $categories = $categoryModel->getAllCategory();
        require 'views/admin/category/index.php';
    }

    public function create(){
        require 'views/admin/category/create.php';
    }

    public function store($db){
       
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name =  $_POST["name"];

            if(!empty($name)){
                $category = new Category($db);
                $success = $category->addCategory($name);

                if($success){
                    header("Location: index.php?controller=Category&action=index");
                } else {
                    die('Error storing name in the database');
                }
            }
            else{
                $error = "name is required";
                require 'views/admin/category/create.php';
            }
            
        }
    }
    public function destroy($db,$id){
        $categoryModel = new Category($db);
        $category = $categoryModel->deleteCategory($id);
        header("Location: index.php?controller=Category&action=index");

    }
}