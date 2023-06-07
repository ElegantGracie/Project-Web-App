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
    
    <title>Sell Fashion</title>
</head>
<body>
    <?php
        // get user unique id which registration num can be used
        $regNum = $_SESSION['registration_num'];

        // when user submits
        if(isset($_POST['submit']))
        {
            // get values of filled fields
            $gender = $_POST['gender'];
            $type = $_POST['type'];
            $condition = $_POST['condition'];
            $exchange = $_POST['exchange'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $product_type = "Fashion";
            $file_name = $_FILES['image']['name'];
            $file_tmp_name = $_FILES['image']['tmp_name'];
            $target_folder = "uploads/";

            // moving image to the uploads folder
            move_uploaded_file($file_tmp_name, $target_folder.$file_name);
        
            // insert item into products table
            $sql1 = "INSERT INTO `products` (`product_name`,`product_category`,`owner_reg_num`) VALUES ('$type','$product_type', '$regNum')";

            $result1 = mysqli_query($conn, $sql1);

            if($result1) {
                // selecting product id and poster's reg num
                $query2 = "SELECT product_id FROM products WHERE product_name = '$type' and owner_reg_num = '$regNum'";

                $result2 = mysqli_query($conn, $query2);

                $row = mysqli_fetch_assoc($result2);

                // getting product id for item id 
                $tmp = $row["product_id"];

                // inserting item into its table
                $query3 = "INSERT INTO fashion_items (`fashion_id`,`gender`, `type`, `condition`, `exchange_possible`,  `price`, `image_path`, `description`) VALUES ('$tmp', '$gender', '$type', '$condition', '$exchange', '$price', '$file_name', '$description')";

                $result3 = mysqli_query($conn, $query3);

                if($result3)
                {
                    echo "<script type='text/javascript'>alert('Successfully Submitted')</script>";
                    header("Location: sell.php");
                }
                else{
                  echo "<script type='text/javascript'>alert('Failed! Please try again')</script>";
                } 
            }
            else{
                  echo "<script type='text/javascript'>alert('Failed! Please try again')</script>";
            } 
        }
    ?>
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
            <!-- Sell Fashion -->
            <div class="container" id="sellFashion">
                <div class="card mt-3 mx-auto">
                    <div class="card-body">
                        <div class="card-header text-center">
                            <h5 class="card-title">Upload Fashion Details</h5>
                        </div>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3 form-floating">
                                                    <select class="form-select" aria-label="Floating label select example" id="floatingSelect" name="gender">
                                                        <option selected>Gender</option>
                                                        <option value="female">Female</option>
                                                        <option value="male">Male</option>
                                                        <option value="unisex">Unisex</option>
                                                    </select>
                                                    <label for="gender">Select</label>
                                                </div>
                                            
                                                <div class="mb-3 form-floating">
                                                    <select class="form-select" aria-label="Floating label select example" id="floatingSelect" name="type">
                                                        <option selected>Type</option>
                                                        <option value="gown">Gowns</option>
                                                        <option value="shirt">Shirts</option>
                                                        <option value="trousers">Trousers</option>
                                                        <option value="footwear">Footwear</option>
                                                    </select>
                                                    <label for="type">Select</label>
                                                </div>
                                            
                                                <div class="mb-3 form-floating">
                                                    <select class="form-select" aria-label="Floating label select example" id="floatingSelect" name="condition">
                                                        <option selected>Condition</option>
                                                        <option value="new">New</option>
                                                        <option value="used">Used</option>
                                                    </select>
                                                    <label for="condition">Select</label>
                                                </div>
                                            </div>     
                                            
                                            <div class="col-6">
                                                <div class="mb-3 form-floating">
                                                    <select class="form-select" aria-label="Floating label select example" id="floatingSelect" name="exchange">
                                                        <option selected>Exchange Possible?</option>
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                    <label for="exchange">Select</label>
                                                </div>
                                            
                                                <div class="mb-3 form-floating">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="90" name="price">
                                                    <label for="price">Expected Price</label>
                                                </div>

                                                <div class="mb-3 form-floating">
                                                    <input type="file" class="form-control" id="image" onchange="showPreview(event)" placeholder="link" accept="image/*" name="image">
                                                    <label for="image">Upload Photo</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class=" mb-3 form-floating">
                                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="description"></textarea>
                                                    <label for="description">Description</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4">
                                        <img src="assets/images/add.png" id="photo" class="photo img-fluid img=thumbnail rounded">
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button type="button" class="btn btn-secondary" onclick="window.location.href='home.php'">Cancel</button>
                                    <input type="submit" id="submit" value="Upload" class="btn btn-danger" name="submit">
                                </div>
                            </div>
                        </form>
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