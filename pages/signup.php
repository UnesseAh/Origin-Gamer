<?php

// connection

include("../connection/database.php");


if(isset($_POST['signup']))
{
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim(md5($_POST['password'])));

    // INSERT DATA INTO DATABASE TABLE
    $query = "INSERT INTO  users (username, email, password) VALUES ('$username', '$email', '$password')";

    mysqli_query($conn, $query);
    header("location: dashboard.php");
    die;
}

?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Sign In Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../assets/img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
</head>

<body  > 
    
    <!----------------- HEADER ----------------->
    <nav class="w-100  nav d-flex justify-content-between bg-dark">
        <div>
        <!-- <img src="../assets/img/logo.png" alt="" class="img-logo"> -->
        <a class="nav-link active" aria-current="page" href="#">GAME STORE</a>
        </div>
        <div class="d-flex">
        <a class="nav-link activated" href="#">Home</a>
        <a class="nav-link disabled" href="#">About Us</a>
        <a class="nav-link disabled">Contact</a>
        </div>
    </nav>

    <!----------------- FORM ----------------->
      
        <div class="container bg-dark text-light p-10 col-4 mt-5 p-4 rounded">
            <div class="row ">
                <div class="">
                <form action="" method="POST">
                    <div class="form-title">
                        <h2 class="fw-bold mb-3">SIGN UP</h2>
                    </div>
                    <p>Create a new account!</p>

                    <label for="usernmae" class="form-label fw-bold">Username</label>
                    <input name="username" type="text" id="username" class="form-control" placeholder="Enter your username">

                    <label for="email" class="form-label fw-bold">Email</label>
                    <input name="email" type="email" id="email" class="form-control" placeholder="Enter your email">

                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">

                    <label for="confirmPassword" class="form-label fw-bold">Confirm Password</label>
                    <input type="password" name="passwordverify" id="confirmPassword" class="form-control" placeholder="Confirm your password">

                    <button type="submit" name="signup" class="btn btn-light rounded-pill mb-3 mt-3 fw-bolder">Sign up</button>
                    </form>
                    <div class="d-flex justify-content-evenly">
                    <p class="">Already have an account? <span class="text-danger">Sign up.</span></p>
                    </div>
                    <div class="d-flex flex-column text-center">
                    <p>——— Sign up with ———</p>
                    <div>
                        <button type="button" class="btn btn-link btn-floating ">
                            <i class="fa-brands fa-facebook"></i>
                        </button>
                        <button type="button" class="btn btn-link btn-floating ">
                            <i class="fa-brands fa-instagram"></i>
                        </button>
                        <button type="button" class="btn btn-link btn-floating ">
                            <i class="fa-brands fa-twitter"></i>
                        </button>

                    </div>
                    </div>

                </div>

        </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>