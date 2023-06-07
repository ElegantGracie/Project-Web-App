<?php
    include 'config/connection.php';
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
    
    <title>Products</title>
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
                        <a class="nav-link btn text-dark" href="home.php"><i class="fa-solid fa-house mx-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn text-dark active btn-outline-danger" href="products.php"><i class="fa-solid fa-cart-plus mx-2"></i>Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn text-dark" href="#"><i class="fa-solid fa-cart-arrow-down mx-2"></i>My Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn text-dark" aria-current="page" href="change_password.php"><i class="fa-solid fa-lock mx-2"></i>Change Password</a>
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

        <div class="container">
            <h1 class="text-center products_title">Available Products</h1>
            <h3 class="text-center">Coming Soon</h3>
        </div>
    </div>
</body>
</html>