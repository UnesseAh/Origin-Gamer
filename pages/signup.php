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

    mysqli_query($connect, $query);
    header("location: signin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<?php 
$pagetitle = 'SIGN UP PAGE'; 
include('../includes/head.php');
?>

  <body>
    <!----------------- HEADER ----------------->
    <nav class="w-100 nav d-flex justify-content-between header-nav">
      <?php include("../includes/header.php");?>
    </nav>

    <!----------------- FORM ----------------->

    <div class="container bg-dark text-light p-10 col-4 mt-5 p-4 rounded">
      <div class="row">
        <div class="">
          <form action="" method="POST">
            <div class="form-title">
              <h2 class="fw-bold mb-3">SIGN UP</h2>
            </div>
            <p>Create a new account!</p>
            <div class="form-group">
              <label for="usernmae" class="form-label fw-bold">Username</label>
              <input
                name="username"
                type="text"
                id="username"
                class="form-control"
                placeholder="Enter your username"
              />
            </div>

            <div class="form-group">
              <label for="email" class="form-label fw-bold">Email</label>
              <input
                name="email"
                type="email"
                id="email"
                class="form-control"
                placeholder="Enter your email"
              />
            </div>

            <div class="form-group">
              <label for="password" class="form-label fw-bold">Password</label>
              <input
                type="password"
                name="password"
                id="password"
                class="form-control"
                placeholder="Enter your password"
              />
            </div>

            <div class="form-group">
              <label for="confirmPassword" class="form-label fw-bold"
                >Confirm Password</label
              >
              <input
                type="password"
                name="passwordverify"
                id="confirmPassword"
                class="form-control"
                placeholder="Confirm your password"
              />
            </div>

            <button
              type="submit"
              name="signup"
              class="btn btn-light rounded-pill mb-3 mt-3 fw-bolder"
            >
              Sign up
            </button>
          </form>
          <div class="d-flex justify-content-evenly">
            <p class="">
              Already have an account? <a href="signin.php" class="text-danger">Sign up.</a>
            </p>
          </div>
          <div class="d-flex flex-column text-center">
            <p>——— Sign up with ———</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
