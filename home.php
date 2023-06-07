<?php
    require ("config/connection.php");
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
    
    <title>Home</title>
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
                        <a class="nav-link btn text-dark" href="change_password.php"><i class="fa-solid fa-lock mx-2"></i>Change Password</a>
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

        <!-- Items and Services Slides -->
        <div class="container">
            <div class="carousel slide" id="carouselExampleInterval" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- <div class="carousel-item active" data-bs-interval="1000"> -->
                        <div class="carousel-item active " data-bs-interval="1000">
                            <img src="assets/images/teaching_and_learning.jpeg" class=" img-fluid d-block w-100">
                            <div class="carousel-caption">
                                <h5 class="text-right text-decoration-none">Furniture</h5>
                            </div>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="carousel-item" data-bs-interval="10000"> -->
                        <div class="carousel-item" data-bs-interval="1000">
                            <img src="assets/images/teaching_and_learning.jpeg" class="card-img-top img-fluid">
                            <div class="carousel-caption">
                                <h5 class="text-right text-decoration-none">Computing</h5>
                            </div>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="carousel-item" data-bs-interval="10000"> -->
                        <div class="carousel-item" data-bs-interval="1000">
                            <img src="assets/images/teaching_and_learning.jpeg" class="card-img-top img-fluid">
                            <div class="carousel-caption">
                                <h5 class="text-right text-decoration-none">Fashion</h5>
                            </div>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="carousel-item" data-bs-interval="10000"> -->
                        <div class="carousel-item" data-bs-interval="1000">
                            <img src="assets/images/teaching_and_learning.jpeg" class="card-img-top img-fluid">
                            <div class="carousel-caption">
                                <h5 class="text-right text-decoration-none">Electronics</h5>
                            </div>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="carousel-item" data-bs-interval="10000"> -->
                        <div class="carousel-item" data-bs-interval="1000">
                            <img src="assets/images/teaching_and_learning.jpeg" class="card-img-top img-fluid">
                            <div class="carousel-caption">
                                <h5 class="text-right text-decoration-none">Education</h5>
                            </div>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="carousel-item" data-bs-interval="10000"> -->
                        <div class="carousel-item" data-bs-interval="1000">
                            <img src="assets/images/teaching_and_learning.jpeg" class="card-img-top img-fluid">
                            <div class="carousel-caption">
                                <h5 class="text-right text-decoration-none">Health & Beauty</h5>
                            </div>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="carousel-item" data-bs-interval="10000"> -->
                        <div class="carousel-item" data-bs-interval="1000">
                            <img src="assets/images/teaching_and_learning.jpeg" class="card-img-top img-fluid">
                            <div class="carousel-caption">
                                <h5 class="text-right text-decoration-none">Miscellaneous</h5>
                            </div>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="carousel-item" data-bs-interval="10000"> -->
                        <div class="carousel-item" data-bs-interval="1000">
                            <img src="assets/images/teaching_and_learning.jpeg" class="card-img-top img-fluid">
                            <div class="carousel-caption">
                                <h5 class="text-right text-decoration-none">Services</h5>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
                <div class="carousel-indicators mx-auto mt-2">
                    <button class="indicator mx-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button class="indicator mx-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button class="indicator mx-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button class="indicator mx-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button class="indicator mx-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button class="indicator mx-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button class="indicator mx-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button class="indicator mx-1"data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> 
        </div>

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="my-5 mx-auto">
                   <button class="btn btn-outline-danger rounded-pill mx-2" onclick="window.location.href = 'sell.php'">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>SELL</span>
            </button>
            <button class="btn btn-outline-danger rounded-pill mx-2">
            <i class="fa-sharp fa-solid fa-bag-shopping"></i>
            <span>PURCHASE</span> 
            </button>
        </div>

        
        

        <!-- Footer -->
        <footer class="card-footer">
            <p class="text-center">XCHANGE Marketplace &copy; 2023</p>
            <p class="text-center">Designed and Implemented by Nwafor Grace</p>
        </footer>
    </div>

    <!-- Bootstrap Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>