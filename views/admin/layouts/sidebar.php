<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="../BIBLIOTECHA/public/admin_assets/css/style.css">
    <title>Dashboard</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="" class="brand"><i class="bx bxs-smile icon"></i>BIBLIOTECHA</a>
        <ul class="side-menu">
            <li><a href="index.php?controller=Dashboard&action=index" class="active"><i class="bx bxs-dashboard icon"></i>Dashboard</a></li>
            <li class="divider" data-text="main">Main</li>
            <li>
                <a href=""><i class="bx bxs-inbox icon"></i>Elements <i class="bx bx-chevron-right icon-right"></i></a>
                <ul class="side-dropdown">
                    <li><a href="index.php?controller=Book&action=index">Books</a></li>
                    <li><a href="">Books</a></li>
                    <li><a href="">Books</a></li>
                    <li><a href="">Books</a></li>
                </ul>
            </li>
            <li><a href="index.php?controller=Book&action=index"><i class="bx bxs-chart icon"></i>Overdue Books</a></li>
            <li><a href=""><i class="bx bxs-widget icon"></i>Borrowed Books</a></li>
            <li class="divider" data-text="manage users">Manage users</li>
            <li><a href=""><i class="bx bxs-dashboard icon"></i>Tables</a></li>
            <li>
                <a href=""><i class="bx bxs-inbox icon"></i>Users <i class="bx bx-chevron-right icon-right"></i></a>
                <ul class="side-dropdown">
                    <li><a href="">Admins</a></li>
                    <li><a href="">Student</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- NAVBAR -->
    <section id="content">
        <nav>
            <i class="bx bx-menu toggle-sidebar"></i>
            <form action="">
                <div class="form-group">
                    <input type="text" class="Search...">
                    <i class="bx bx-search icon"></i>
                </div>
            </form>
            <a href="" class="nav-link">
                <i class="bx bxs-bell icon"></i>
                <span class="badge">5</span>
            </a>
            <a href="" class="nav-link">
                <i class="bx bxs-message-square-dots icon"></i>
                <span class="badge">5</span>
            </a>
            <span class="divider"></span>
            <div class="profile">
                <img src="http://localhost/ODC/BIBLIOTECHA/public/assets/images/IMG_2771.JPG" alt="" srcset="">
                <ul class="profile-link">
                    <li><a href=""><i class="bx bxs-user-circle icon"></i>Profile</a></li>
                    <li><a href=""><i class="bx bxs-cog icon"></i>Settings</a></li>
                    <li><a href=""><i class="bx bxs-log-out-circle icon"></i>Logout</a></li>
                </ul>
            </div>
        </nav>
        <!-- MAIN -->
        <main>