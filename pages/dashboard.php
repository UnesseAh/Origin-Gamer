<?php
include('../functions/crud.php');

$pagetitle = 'DASHBOARD PAGE'; 
include('../includes/head.php');
?>


  <body>
    <!----------------- HEADER ----------------->
    <nav class="dash-bg w-100 px-3 nav d-flex justify-content-between bg-dark">
    <div class="d-flex justify-content-evenly align-items-center ">
        <img src="../assets/img/logo.png" alt="" class="logo-img " >
        <a class="nav-link active ps-0" aria-current="page" href="#" >GAME STORE</a>
        <label for="check"> <i id="burger" class="ms-3 fs-3 text-light fa-solid fa-bars"></i></label>
    </div>
        <a class="nav-link ">
        <i class="fa-solid fa-user px-2"></i>

          <?php
                session_start();
                echo $_SESSION['admin'];
          ?>
          </a>
    </nav>


    <main>
    <div class="container text-light p-5 rounded static-seq">
      <div class="d-flex align-items-center justify-content-between">
      <div class="card bg-danger">
        <div class="card-body text-light fw-bold">
          categories dafjkfhasdjfhasjdhfkajlsd
        </div>
      </div>
      <div class="card bg-danger">
        <div class="card-body text-light fw-bold">
          Total Products
        </div>
      </div>
      <div class="card bg-danger ">
        <div class="card-body text-light fw-bold">
          This is some text within a card body.
        </div>
      </div>


       

       
      </div>
    </div>
      <aside id="aside-bar" >
        <div class="d-flex justify-content-center flex-column gap-2 mx-2 sidbar-button">
        <button type="button"  class="btn color-btn  rounded rounded-pill"  data-bs-toggle="modal"  data-bs-target="#staticBackdrop">ADD PRODUCT</button>
        <button type="button"  class="btn color-btn  rounded rounded-pill" >Statistics</button>
        <button type="button"  class="btn color-btn  rounded rounded-pill" >Edit Profile</button>
        </div>
        <div class="d-flex justify-content-center">
        <a href="../functions/logout.php" name="logout" class="btn btn-danger rounded rounded-pill">Logout</a>
        </div>
      </aside>
      <section class="container-section">
      <div class="table-responsive mx-4" style="width:94%">
        <table class="table table-dark table-striped   table-bordered rounded shadow-sm table-hover">
          <thead>
            <tr class="" >
              <th scope="col" class="text-center">ID</th>
              <th scope="col" class="text-center">Image</th>
              <th scope="col" class="text-center">Name</th>
              <th scope="col" class="text-center">Category</th>
              <th scope="col" class="text-center">Quantity</th>
              <th scope="col" class="text-center">Price</th>
              <th scope="col" class="text-center">ACTION</th>
            </tr>
          </thead>
          <tbody>
            <?php
                displayProduct();
            ?>
          </tbody>
        </table>
        </div>
        </section>
        </main>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        <!-- Modal -->
    <div
      class="modal fade"
      id="staticBackdrop"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">
              Add Product
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form action="../functions/crud.php" method="post" class="form-transparent" enctype="multipart/form-data">
            <div class="modal-body">
              <label for="name" class="form-label fw-bold">Name</label>
              <input
                name="name"
                type="text"
                id="name"
                class="form-control"
                placeholder="Enter the name of the product"
              />
              <label for="categiry" class="form-label fw-bold">Category</label>
              <select
                name="category"
                class="form-select"
                aria-label="Default select example"
                id="category"
                required
              >
                <option selected disabled value="">Please select</option>
                <option value="1">Game</option>
                <option value="2">Keyboard</option>
                <option value="3">Mouse</option>
                <option value="4">Monitor</option>
                <option value="5">Laptop</option>
              </select>
              <label for="quantity" class="form-label fw-bold">Quantity</label>
              <input
                name="quantity"
                type="number"
                id="quantity"
                class="form-control"
                placeholder="Enter the quantity of the product "
              />
              <label for="price" class="form-label fw-bold">Price</label>
              <input
                name="price"
                type="number"
                id="price"
                class="form-control"
                placeholder="Enter the price of the product"
              />
              <label for="image" class="form-label fw-bold">Image</label>
              <input
                name="image"
                type="file"
                id="image"
                class="form-control"
                accept=".jpg, .png, .jpeg"
              />
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
              >
                Close
              </button>
              <button type="submit" name="addProduct" class="btn btn-primary">
                ADD
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
    $(document).ready( function () {
    $('#myTable').DataTable();
      } );
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      var el = document.getElementById("wrapper");
      var toggleButton = document.getElementById("menu-toggle");

      toggleButton.onclick = function () {
        el.classList.toggle("toggled");
      };
    </script>
    <script src="../javascript/form.js"></script>
    <script src="../javascript/sidbar.js"></script>
  </body>
</html>
