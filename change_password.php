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
    
    <title>Change Password</title>
</head>
<body>
    <?php
        $regNum = $_SESSION['registration_num'];

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $currentPass = $_POST['currentPass']; //current password taken as input
            $new_password = $_POST['newPass'];
            $confirm_new_password = $_POST['confirmNewPass'];

            // Check if all required fields are filled
            if (!empty($currentPass) && !empty($new_password) && !empty($confirm_new_password)) {
                $query1 = "SELECT * FROM users WHERE registration_num = '$regNum'";
                $result1 = mysqli_query($conn, $query1);
                $row1 = mysqli_fetch_assoc($result1); 
                $hashedPass = $row1["password"]; // current password of the user

                if(password_verify($currentPass, $hashedPass)) {
                
                    if($new_password == $confirm_new_password) {
                        // Hash the password for security
                        $newHashedPass = password_hash($new_password, PASSWORD_DEFAULT);
                        $query2 = "UPDATE users SET password = '$newHashedPass' WHERE registration_num = '$regNum'";
                        $result2 = mysqli_query($conn, $query2);
                        if($result2) {
                            echo "<script>alert('Password succesfully updated')</script>";
                            header('Location: login.php');
                        } else {
                            echo "<script>alert('Password was not updated')</script>";
                        }
                    } else{
                        echo "<script>alert('New password and confirm new password do not match!')</script>";
                        exit; 
                    }
                } else{
                    echo "<script>alert('Current password you entered is incorrect!')</script>";
                }
            } else {
                echo "<script>alert('Fill all the required  fields')</script>";
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
                        <a class="nav-link btn text-dark" href="home.php"><i class="fa-solid fa-house mx-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn text-dark" href="products.php"><i class="fa-solid fa-cart-plus mx-2"></i>Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn text-dark" href="#"><i class="fa-solid fa-cart-arrow-down mx-2"></i>My Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active btn text-dark btn-outline-danger" aria-current="page" href="change_password.php"><i class="fa-solid fa-lock mx-2"></i>Change Password</a>
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

        <div class="container p-5">
            <div class="card">
            <div class="row p-5 rounded-4">
                    <div class="col-md-12">
                        <h3 class="text-center">Change Password</h3>
                    </div>
                    <form class="row g-3 p-3 needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div class="col-12 form-floating mb-3">
                            <input type="password" class="form-control" id="currentPass" placeholder="*****" name="currentPass" required>
                            <label for="currentPass">Current Password</label>
                        </div>
                        <div class="col-12 form-floating mb-3">
                            <input type="password" class="form-control" id="newPass" placeholder="*****" name="newPass" required>
                            <label for="newPass">New Password</label>
                        </div>
                        <div class="col-12 form-floating mb-3">
                            <input type="password" class="form-control" id="confirmNewPass" placeholder="*****" name="confirmNewPass" required>
                            <label for="confirmNewPass">Confirm New Password</label>
                        </div>
                        <div class="col-md-4 d-md-flex">
                            <button type="button" class="btn btn-dark w-75 text-center" onclick="window.location.href='home.php'">Cancel</button>
                            <input type="submit" class="btn btn-danger w-75" value="Change">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>