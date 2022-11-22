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
  <?php 
$pagetitle = 'SIGN IN PAGE'; 
include('../includes/head.php');
?>

<body class="signin-bg">
  <nav class="bg-dark w-100 nav d-flex px-5 justify-content-between header-bg header-nav header-style">
    <?php include("../includes/header.php");?>
  </nav>
    <!----------------- FORM ----------------->

    <div class="container container-signin form-background  bg-dark radius text-light p-10 col-4 mt-5 p-4 rounded col-lg-4 col-md-8 col-sm-10 " >
      <div class="">
        <div class="">
          <div class="form-title">
            <h2 class="fw-bold mb-3">LOGIN</h2>
          </div>
          <div class="error text-light"></div>
          <form id="signin-form" action="" method="post"  data-parsley-validate>
            <p>Good to see you again!</p>
           
            <label for="email" class="form-label fw-bold">Email</label>
            <input
              name="email"
              type="email"
              id="email"
              class="form-control"
              placeholder="Enter your email"
              data-parsley-trigger="keyup"
              data-parsley-type="email"
              required
            />
            <label for="password" class="form-label fw-bold">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              class="form-control"
              placeholder="Enter your password"
              data-parsley-trigger="keyup"
              required
            />
            <p class="text-danger">Forgot password?</p>
            <div>
            <button type="submit" name="signin" class="w-100 btn btn-primary rounded-pill mb-3 mt-3 fw-bolder"
            >
              Sign in
            </button>
            </div>
          </form>

          <div class="d-flex justify-content-evenly">
            <p class="">
              Don't have an account yet?
              <a href="signup.php" class="text-danger">Create one now.</a>
            </p>
          </div>
          <div class="d-flex flex-column text-center">
            <p>——— log in with ———</p>
            <div>
              <button type="button" class="btn btn-link btn-floating">
                <i class="fa-brands fa-facebook"></i>
              </button>
              <button type="button" class="btn btn-link btn-floating">
                <i class="fa-brands fa-instagram"></i>
              </button>
              <button type="button" class="btn btn-link btn-floating">
              <i class="fa-brands fa-twitter"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../javascript/formvalidation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
