<?php
    include("config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ***** Favicon ***** -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    
    <!-- ***** Custom CSS ***** -->
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    
    <!-- ***** Bootstrap CSS ***** -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- ***** Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Sell</title>
</head>
<body>
    <div class="container-fluid">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo1.png" alt="logo" class="img-fluid logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-links">
                    <li class="nav-item">
                        <a class="nav-link active btn text-dark btn-outline-danger" aria-current="page" href="home.php"><i class="fa-solid fa-house mx-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn text-dark" href="products.php"><i class="fa-solid fa-cart-plus mx-2"></i>Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn text-dark" href="#"><i class="fa-solid fa-cart-arrow-down mx-2"></i>My Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn text-dark" href="#"><i class="fa-solid fa-lock mx-2"></i>Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn text-dark" href="logout.php"><i class="fa-solid fa-power-off mx-2"></i>Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn text-dark" href="#"><i class="fa-solid fa-user mx-2"></i>
                        <?php 
                            echo $_SESSION['registration_num'];
                        ?></a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn text-dark btn text-dark btn-outline-danger" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>

        <!-- Section Title -->
        <div class="container mt-1">
            <h1 class="text-center">Sell Products</h1>
        </div>

        <!-- Sell Contents -->
        <div class="container d-lg-flex flex-lg-row-reverse">

            <!-- How to sell -->
            <div class="container">                    
                <div class="card mt-5 mx-auto">
                    <div class="card-body">
                        <h5 class="card-title text-center fs-2">How to sell</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-evenly align-items-center fs-4">
                                <span class="badge bg-danger rounded-pill">1</span>
                                Click on any of your chosen categories.
                            </li>
                            <li class="list-group-item d-flex justify-content-evenly align-items-center fs-4">
                                <span class="badge bg-danger rounded-pill">2</span>
                                Fill the details and description of your ad.
                            </li>
                            <li class="list-group-item d-flex justify-content-evenly align-items-center fs-4">
                                <span class="badge bg-danger rounded-pill">3</span>
                                Pay 10% of the price of your ad in order to upload. 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Clickable options -->
            <div class="row">
                <div class="col-6 col-lg-12">
                    <a href="sell_furniture.php" class="btn btn-outline-danger d-block w-100 mt-3">Furniture</a>
                    <a href="sell_computing.php" class="btn btn-outline-danger d-block w-100 mt-3">Computing</a>
                    <a href="sell_fashion.php" class="btn btn-outline-danger d-block w-100 mt-3">Fashion</a>
                    <a href="sell_electronics.php" class="btn btn-outline-danger d-block w-100 mt-3">Electronics</a>
                </div>
                <div class="col-6 col-lg-12">
                    <a href="sell_books.php" class="btn btn-outline-danger d-block w-100 mt-3">Books</a>
                    <a href="sell_health&beauty.php" class="btn btn-outline-danger d-block w-100 mt-3">Health & Beauty</a>
                    <a href="sell_miscellaneous.php" class="btn btn-outline-danger d-block w-100 mt-3">Miscellaneous</a>
                    <a href="sell_services.php" class="btn btn-outline-danger d-block w-100 mt-3">Services</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>