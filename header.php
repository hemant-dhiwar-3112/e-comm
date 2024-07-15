<!DOCTYPE HTML>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="./icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./icon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Ecommerce</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!-- font awesome style -->
    <link rel="stylesheet" href="./css/bootstrap-icons.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="./css/styleall1.css">
    <!-- responsive style -->
    <link rel="stylesheet" href="./css/responsive1.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
    <div class="container">
        <?php include ('msgbox.php'); ?>
        <div class="row">
            <div class="navbar navbar-expand-lg">
                <div class="col-lg-3">
                    <img src="./image/logo.png" alt="" style="width:250px">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col-lg-8 offset-lg-1" style="text-align: center;">
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav mt-3 justify-content-lg-between justify-content-center" id="nav1">
                            <li class="nav-item" id="item1"><a class="nav-link" href="index.php">home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item p-2" href="About.php">About</a></li>
                                    <li><a class="dropdown-item p-2 my-1"
                                            href="Customer-Testimonial.php">Testimonial</a></li>
                                    <li><a class="dropdown-item p-2 my-1" href="contact.php">contact</a></li>
                                </ul>
                            </li>
                            <li class="nav-item "><a href="productall.php" class="nav-link">products</a></li>
                            <?php
                            if (isset($_SESSION['user'])) { ?>
                                <li class="nav-item"><a class="nav-link" href="proacc.php">profile</a>
                                <li class="nav-item">
                                    <a href="logout.php" class="nav-link">logout</a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item"><a href="login.php" class="nav-link">login</a></li>
                                <li class="nav-item "><a href="Register.php" class="nav-link"> Register </a></li>
                            <?php } ?>
                            <li class="nav-item img1 "><a href="cart.php" class="nav-link "><img
                                        src=".//icon/shopping-cart.png" alt="" class="w-100"></a></li>
                            <li class="nav-item img1" id="li">
                                <img src=".//icon/search.png" class="nav-link w-100" id="img" style="cursor: pointer;">
                                <fieldset class="d" id="search">
                                    <form action="search.php" method="post">
                                        <div class="header-search" style="padding: 6px 0 6px 6px;">
                                            <input type="text" name="name" id="input-box" class="input1 form-control"
                                                value="" placeholder="Enter Item Name">
                                            <span id="search-button" class="btn btn-secondary rounded-0">X</span>
                                        </div>
                                    </form>
                                </fieldset>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>