<?php
    include('config/connection.php');
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

    <title>XCHANGE</title>
</head>
<body>
    <div class="container-fluid">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo1.png" alt="logo" class="img-fluid logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav navbar-links">
                        <!-- Button trigger modal -->
                        <a class="nav-link btn btn-outline-danger mx-5 text-dark" href="" type="button" data-bs-toggle="modal" data-bs-target="#aboutUsModal"><span>About us</span> </a>
                        <a class="nav-link btn btn-outline-danger mx-5 text-dark" href="register.php" type="button"><span>Signup</span></a>
                        <a class="nav-link btn btn-outline-danger mx-5 text-dark" href="login.php" type="button"><span>Login</span></a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- About Us Modal -->
        <div class="modal fade" id="aboutUsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">About XCHANGE</h1>
                        <button type="button" class="btn-close close-button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h1>XCHANGE MARKETPLACE</h1>
                        <h2>Buy, Sell &amp; Exchange your items.</h2>
                        <p>All students have access to XCHANGE Marketplace, a website where they may buy, sell, or even trade anything they like. It is not just restricted to commodities. As a student, you can promote your products or services. Who could be viewing is unknown.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger close-button" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger">Start using</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Banner -->
        <div class="card text-bg-dark position-relative">
            <img src="assets/images/smoke.jfif" class="card-img h-50" alt="hero-image">
            <div class="card-body card-img-overlay position-absolute top-50 start-50 translate-middle">
                <h1 class="card-title text-center text-danger">Welcome to XCHANGE</h1>
            </div>

            <!-- Footer -->
            <footer class="card-footer">
                <p class="text-center">XCHANGE Marketplace &copy; 2023</p>
                <p class="text-center">Designed and Implemented by Nwafor Grace</p>
            </footer>
        </div>
    </div>

    <!-- Bootstrap Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>