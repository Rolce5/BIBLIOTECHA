

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'config.php';
require 'Models/User.php';
require 'Models/Category.php';
require 'Models/Book.php';
require 'Models/Author.php';
require 'Controllers/PageController.php';
require 'Controllers/Auth/LoginController.php';
require 'Controllers/Auth/RegisterController.php';
require 'Controllers/Auth/ForgotPasswordController.php';
require 'Controllers/Admin/BookController.php';
require 'Controllers/Admin/DashboardController.php';
require 'Controllers/Admin/CategoryController.php';
require 'Controllers/Admin/AuthorController.php';


// Database connection
$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);

// Determine the controller and action
$defaultController = 'Page';
$defaultAction = 'index';

$controllerName = isset($_GET['controller']) ? $_GET['controller'] : $defaultController;
$action = isset($_GET['action']) ? $_GET['action'] : $defaultAction;

// Create the instance of the determined controller
$controllerClass = $controllerName . 'Controller';
$controller = new $controllerClass();

// Basic routing based on the action
if (method_exists($controller, $action)) {
    if(isset($_GET['id'])) {
        $controller->$action($db, $_GET['id']);
    } else {
        $controller->$action($db);
    }
} else {
    // Handle 404 or default action
    $controller->$defaultAction($db);
}
?>