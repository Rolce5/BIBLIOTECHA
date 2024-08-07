<?php
class CategoryController
{
    public function index($db)
    {
        $categoryModel = new Category($db);
        $categories = $categoryModel->getAllCategory();
        require 'views/admin/category/index.php';
    }

    public function create()
    {
        require 'views/admin/category/create.php';
    }

    public function store($db)
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name =  $_POST["name"];

            if (!empty($name)) {
                $category = new Category($db);
                $success = $category->addCategory($name);

                if ($success) {
                    header("Location: index.php?controller=Category&action=index");
                } else {
                    die('Error storing name in the database');
                }
            } else {
                $error = "name is required";
                require 'views/admin/category/create.php';
            }
        }
    }
    public function destroy($db, $id)
    {
        $categoryModel = new Category($db);
        $category = $categoryModel->deleteCategory($id);
        header("Location: index.php?controller=Category&action=index");
    }
    public function edit($db, $id)
    {
        $categoryModel = new Category($db);
        $category = $categoryModel->getCategoryById($id);

        require 'views/admin/category/edit.php';
    }

    public function update($db)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $categoryId = $_POST['category_id'];
            $name =  $_POST["name"];

            if (!empty($name)) {
                $category = new Category($db);
                $success = $category->updateCategory($categoryId, $name);

                if ($success) {
                    header("Location: index.php?controller=Category&action=index");
                } else {
                    die('Error storing name in the database');
                }
            } else {
                $error = "name is required";
                require 'views/admin/category/create.php';
            }
        }
    }
}
