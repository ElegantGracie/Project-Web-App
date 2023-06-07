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
    
    <title>Register</title>
</head>
<body>
    <?php

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Get form data
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $regNum = $_POST["regNum"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["confirmPassword"];

            // Check if all required fields are filled
            if (!empty($firstName) && !empty($lastName) && !empty($regNum) && !empty($email) && !empty($password) && !empty($confirmPassword)) {

                // Validate email
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    // Validate registration number format
                    if (preg_match("/^\d{4}\/[A-Za-z]{2,3}\/\d{4,5}$/", $regNum)) {

                        // Check if password matches confirmation
                        if ($password == $confirmPassword) {

                            // Hash the password for security
                            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                            // Check if registration number already exists in the database
                            $check_sql = "SELECT * FROM users WHERE registration_num = '$regNum'";
                            $result = mysqli_query($conn, $check_sql);
                            if (mysqli_num_rows($result) > 0) {
                                echo "<script>alert('Registration number already exists!')</script>";
                            } else {
                                // Insert user data into "users" table
                                $sql = "INSERT INTO users (first_name, last_name, registration_num, email, password) VALUES ('$firstName', '$lastName', '$regNum', '$email', '$hashedPassword')";

                                if (mysqli_query($conn, $sql)) {
                                    header("Location: login.php");
                                    exit();
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }

                                // Close database connection
                                mysqli_close($conn);
                            }

                        } else {
                            echo "<script>alert('Passwords do not match!')</script>";
                        }

                    } else {
                        echo "<script>alert('Invalid registration number format!')</script>";
                    }
                } else {
                    echo "<script>alert('Invalid email format')</script>";
                }
            } else {
                echo "<script>alert('All fields are required!')</script>";
            }
        }

    ?>

    <div class="container-fluid">
        <div class="registration">
            <div class="container p-5">
                <div class="row bg-secondary p-5 rounded-4">
                    <div class="col-md-12">
                        <h3 class="text-center">Registration Form</h3>
                    </div>
                    <form class="row g-3 p-3 needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div class="col-md-6 form-floating mb-3">
                            <input type="text" class="form-control" id="lastName" placeholder="Lyon" name="lastName" required>
                            <label for="lastName">Last Name</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <input type="text" class="form-control" id="firstName" placeholder="King" name="firstName" required>
                            <label for="firstName">First Name</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <input type="text" class="form-control" id="regNum" placeholder="2018/SC/1234" name="regNum" required>
                            <label for="regNum">Registration Number</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="lyonking@email.com" name="email" required>
                            <label for="email">Email Address</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <input type="password" class="form-control" id="password" placeholder="*****" name="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <input type="password" class="form-control" id="confirmPassword" placeholder="*****" name="confirmPassword" required>
                            <label for="confirmPassword">Confirm Password</label>
                        </div>
                        <div class="col-md-8 form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="TAndC" name="TAndC" required>
                            <label class="form-check-label" for="TAndC">By creating an account, you agree to our <a href="#" class="link-info text-decoration-none">Terms and Conditions</a></label>
                        </div>
                        <div class="col-md-4 d-md-flex">
                            <button type="button" class="btn btn-dark w-75 text-center" onclick="window.location.href='index.php'">Cancel</button>
                            <input type="submit" class="btn btn-danger w-75" value="Register">
                        </div>
                        <div class="col-md-12">
                            <p class="text-center">Do you already have an account? <a href="login.php" class="link-info text-decoration-none">Login here</a></p>
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