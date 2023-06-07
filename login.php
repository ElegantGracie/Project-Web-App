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
    
    <title>Login</title>
</head>
<body>

    <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $regNum = $_POST["regNum"];
            $password = $_POST["password"];

            // Check if all required fields are filled
            if (!empty($regNum) && !empty($password)) {
                // Validate registration number format
                if (preg_match("/^\d{4}\/[A-Za-z]{2,3}\/\d{4,5}$/", $regNum)) {
                    // Query to check if user with provided regNum exists
                    $sql = "SELECT * FROM users WHERE registration_num = '$regNum'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // User with provided regNum exists, check password
                        $row = mysqli_fetch_assoc($result);
                        $hashedPassword = $row["password"];
                        if (password_verify($password, $hashedPassword)) {
                            // Passwords match, login successful
                            session_start();
                            $_SESSION["registration_num"] = $regNum;
                            header("Location: home.php"); // Redirect to dashboard after successful login
                        } else {
                            // Passwords don't match
                            echo "<script>alert('Incorrect password!')</script>";
                        }
                    } else {
                        // User with provided regNum doesn't exist
                        echo "<script>alert('User with provided registration number doesn't exist!')</script>";
                    }
                } else {
                    // Invalid registration number format
                    echo "<script>alert('Invalid registration number format!')</script>";
                }
            } else {
                // All fields are required
                echo "<script>alert('All fields are required!')</script>";
            }
        }
    ?>


    <div class="container-fluid">
        <div class="registration">
            <div class="container p-5">
                <div class="row bg-secondary p-5 rounded-4">
                    <div class="col-md-12">
                        <h3 class="text-center">Login Form</h3>
                    </div>
                    <form class="row g-3 p-3 needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div class="col-md-6 form-floating mb-3">
                            <input type="text" class="form-control" id="regNum" placeholder="2018/SC/1234" name="regNum" required>
                            <label for="regNum">Registration Number</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <input type="password" class="form-control" id="password" placeholder="*****" name="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="col-md-8 form-check">
                            <input class="form-check-input" type="checkbox" id="signed" name="signed" checked>
                            <label class="form-check-label" for="TAndC">Keep me signed in.</label>
                        </div>
                        <div class="col-md-4 d-md-flex">
                            <button type="button" class="btn btn-dark w-75 d-inline-block" onclick="window.location.href='index.php'">Cancel</button>
                            <input type="submit" class="btn btn-danger w-75 d-inline-block" value="Login">
                        </div>
                        <div class="col-md-12">
                            <p class="text-center">Are you a new user? <a href="register.php" class="link-info text-decoration-none">Register here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></scriptError:>
        
    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>