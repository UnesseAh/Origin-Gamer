<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Sign In Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
</head>

<body  > 
    
    <!----------------- HEADER ----------------->
    <nav class="w-100  nav d-flex justify-content-between bg-dark">
        <div>
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
                <form action="">
                    <div class="form-title">
                        <h2 class="fw-bold mb-3">LOGIN</h2>
                    </div>
                    <p>Good to see you again!</p>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter your email">
                    <label for="password" class="form-label">Password</label>
                    <input type="email" id="password" class="form-control" placeholder="Enter your password">
                    <p class="text-danger">Forgot password?</p>
                    <button class="btn w-10">Sign in</button>
                    <div class="d-flex justify-content-evenly">
                    <p class="">Don't have an account yet?</p>
                    <span class="text-danger">Create one.</span>
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
                </form>
                </div>

        </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>