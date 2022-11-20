<?php

include("../connection/database.php");

session_start();

if(isset($_POST['signin']))   signin();


function signin()
{
    global $connect;
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password = '$password'";
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) == 1){
        $admin = mysqli_fetch_assoc($result);
        $_SESSION["admin"] = $admin['username'];
        header("Location:dashboard.php");
    }else {
        header("Location:signin.php");
    }

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
                <form action="" method="post" class="form-transparent">
                    <div class="form-title">
                        <h2 class="fw-bold mb-3">LOGIN</h2>
                    </div>
                    <p>Good to see you again!</p>
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input name="email" type="email" id="email" class="form-control" placeholder="Enter your email">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                    <p class="text-danger">Forgot password?</p>
                    <button type="submit" name="signin" class="btn btn-light rounded-pill mb-3 mt-3 fw-bolder">Sign in</button>
                    </form>

                    <div class="d-flex justify-content-evenly">
                    <p class="">Don't have an account yet? <span class="text-danger">Create one.</span></p>
                    </div>
                    <div class="d-flex flex-column text-center">
                    <p>——— log in with ———</p>
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