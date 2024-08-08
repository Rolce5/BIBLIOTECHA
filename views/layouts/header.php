<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../BIBLIOTECHA/public/assets/css/styles.css">
    <link rel="stylesheet" href="../BIBLIOTECHA/public/assets/css/common.css">
</head>

<body>
    <div class="header-wrapper">
        <div class="header-content">
            <a class="logo-wrapper" href="">
                <img src="../BIBLIOTECHA/public/assets/images/IMG_2771.JPG" alt="">
            </a>
            <nav class="header-nav">
                <ul class="nav-links">
                    <li class="nav-items">
                        <a href="index.php?controller=Page&action=index" class="nav-link">Home</a>
                    </li>
                    <li class="nav-items">
                        <a href="index.php?controller=Page&action=showCatalogue" class="nav-link">Catalogue</a>
                    </li>
                    <li class="nav-items">
                        <a href="index.php?controller=Login&action=showLoginForm" class="nav-link">Login</a>
                    </li>
                    <li class="nav-items">
                        <a href="index.php?controller=Register&action=showRegisterForm" class="nav-link">Register</a>
                    </li>
                    <li class="nav-items">
                        <a href="index.php?controller=Page&action=showTransaction" class="nav-link">Transactions</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="search-container">
            <input type="text" class="form-control" placeholder="Search Here">
            <span class="search-icon"><i class="bi bi-search"></i></span>
        </div>
    </div>
