<?php
include('../functions/crud.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/dashboard.css" />
    <link rel="icon" href="../assets/img/logo.png">
    <title>Admin Dashboard</title>
</head>

<body>

    <div class="container bg-dark text-light p-3 rounded my-4">
        <div class="d-flex align-items-center justify-content-between">
            <h2>WELCOME</h2>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            ADD PRODUCT
            </button>
        </div>
    </div>

    <div class="row my-5">
        <h3 class="fs-4 mb-3 text-white">Recent Orders</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">Id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">ACTION</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    displayProduct();

                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../functions/crud.php" method="post" class="form-transparent">
      <div class="modal-body">
            <label for="name" class="form-label fw-bold">Name</label>
            <input name="name" type="text" id="name" class="form-control" placeholder="Enter the name of the product">
            <label for="categiry" class="form-label fw-bold">Category</label>
                <select name="category" class="form-select" aria-label="Default select example" id="category" required>
                    <option selected disabled value="">Please select</option>
                    <option value="1">Game</option>
                    <option value="2">Keyboard</option>
                    <option value="3">Mouse</option>
                    <option value="4">Monitor</option>
                    <option value="5">Laptop</option>
                </select>
            <label for="quantity" class="form-label fw-bold">Quantity</label>
            <input name="quantity" type="number" id="quantity" class="form-control" placeholder="Enter the quantity of the product ">
            <label for="price" class="form-label fw-bold">Price</label>
            <input name="price" type="number" id="price" class="form-control" placeholder="Enter the price of the product">
            <label for="image" class="form-label fw-bold">Image</label>
            <input name="image" type="text" id="image" class="form-control" placeholder="Enter the name of the image">

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="addProduct" class="btn btn-primary">ADD</button>
        </div>
    </form>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>