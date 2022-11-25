<?php
session_start();
if(!isset($_SESSION['admin'])){
  header('location:signin.php');
}
include('../functions/crud.php');
include('../functions/statistics.php');

/*//////////////////////////  INCLUDE THE HEAD  //////////////////////////*/
$pagetitle = 'DASHBOARD PAGE'; 
include('../includes/head.php');
?>


<body class="dashboard-body">
  <!--////////////////////////// HEADER //////////////////////////-->
  <nav class="dash-bg w-100 px-3 nav d-flex justify-content-between bg-dark">
    <div class="d-flex justify-content-evenly align-items-center">
        <img src="../assets/img/logo.png" alt="" class="logo-img">
        <a class="nav-link active ps-0" aria-current="page" href="#" >GAME STORE</a>
        <label for="check"> <i id="burger" class="ms-3 fs-3 text-light fa-solid fa-bars"></i></label>
    </div>
    <a class="nav-link">
    <i class="fa-solid fa-user px-2"></i>
      <?php
        echo $_SESSION['admin'];
      ?>
    </a> 
  </nav>

  <main>
    <!--//////////////// ASIDE BAR SECTION ///////////////////////-->
    <aside id="aside-bar" >

      <div class="d-flex justify-content-center flex-column gap-2 mx-2 sidbar-button">
        <button type="button"  class="btn color-btn rounded rounded-pill"  data-bs-toggle="modal"  data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus"></i> ADD PRODUCT</button>
        <button type="button" class="btn color-btn rounded rounded-pill">EDIT PROFILE</button>
      </div>
      <div class="d-flex justify-content-center">
        <a href="../functions/logout.php" name="logout" class="btn btn-danger rounded rounded-pill">Logout</a>
      </div>
    </aside>

    <section id="section" class="container-section">
      <div class="container-fluid  text-light p-5 rounded ">
        <div class="row justify-content-around">
          <!--//////////////// STATISTICS SECTION ///////////////////////-->
          <div class="card col-md-3 mt-0  mb-3 statistic-cards">

            <!--////////////////////////// CATEGORIES CARD //////////////////////////-->
            <div class="card-body mt-3 text-light fw-bold text-center">Categories</div>
              <div class="pb-3 d-flex justify-content-center">
                <!----- GAMES ICONS ----->
                <span class="d-flex align-items-center flex-column ">
                  <span>
                    <i class="fa-solid fa-gamepad statistics-icons bg-dark"></i>
                  </span>
                  <span class="text-light  fw-bold text-center p-2 fs-4">
                    <?php echo statistics(1); ?>
                  </span>
                </span>
                <!------- KEYBOARD ICONS ----->
                <span class="d-flex align-items-center flex-column ">
                  <span>
                    <i class="fa-solid fa-keyboard statistics-icons bg-dark"></i>
                  </span>
                  <span class="text-light  fw-bold text-center p-2 fs-4">
                    <?php echo statistics(2); ?>
                  </span>
                </span>
                <!-------- MONITOR ICONS ------>  
                <span class="d-flex align-items-center flex-column ">
                  <span class="icon">
                    <i class="fa-solid fa-tv statistics-icons bg-dark"></i>
                  </span>
                  <span class="text-light  fw-bold text-center p-2 fs-4">
                    <?php echo statistics(4); ?>
                  </span>
                </span>

                <!-------- MONITOR ICONS ------->
                <span class="d-flex align-items-center flex-column ">
                  <span>
                    <i class="fa-solid fa-computer statistics-icons bg-dark"></i>
                  </span>
                  <span class="text-light  fw-bold text-center p-2 fs-4">
                  <?php echo statistics(5); ?>
                  </span>
                </span>
              </div>
            </div>
            
            <!--///////////////////////// TOTAL PRODUCTS CARD //////////////////////////-->
            <div class="card col-md-3 mt-0 mb-3 col-sm-12 statistic-cards  d-flex ">
              <div class="card-body text-light fw-bold text-center ">
                <p> Total products</p>
                  <span class="text-danger  fw-bold text-center p-2 fs-4">
                    <?php echo totalProducts(); ?>
                  </span>
              </div>
            </div>

            <!--////////////////////////// TOTAL QUANTITIES CARD //////////////////////////-->
            <div class="card col-md-3 mt-0 mb-3 col-sm-12 statistic-cards d-flex align-items-center ">
              <div class="card-body text-light fw-bold text-center">
                <p>Total quantities</p>
                <div>
                  <span class="text-danger fw-bold text-center p-2 fs-4">
                    <?php echo totalQuantities(); ?>
                  </span>
                </div>
              </div>
            </div>

          </div>

          <!--////////////////////////// TABEL SECTION //////////////////////////-->
          <div class="table-responsive" style="width:100%">
            <table id="myTable" class="table table-dark table-striped   table-bordered rounded shadow-sm table-hover">
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
                <?php displayProduct(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </main>
    
  <!--//////////////// MODAL STARTS HERE ///////////////////////-->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Product</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <form action="../functions/crud.php" method="post" class="form-transparent" enctype="multipart/form-data">
            <div class="modal-body">

              <label for="name" class="form-label fw-bold">Name</label>
              <input name="name" type="text" id="name" class="form-control" placeholder="Enter the name of the product"/>

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
              <input name="quantity" type="number" id="quantity" class="form-control" placeholder="Enter the quantity of the product"/>

              <label for="price" class="form-label fw-bold">Price</label>
              <input name="price" type="number" id="price" class="form-control" placeholder="Enter the price of the product"/>

              <label for="image" class="form-label fw-bold">Image</label>
              <input name="image" type="file" id="image" class="form-control" accept=".jpg, .png, .jpeg"/>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="addProduct" class="btn btn-primary">ADD</button>
            </div>

          </form>
        </div>
      </div>
    </div>
    <!--//////////////// MODAL ENDS HERE ///////////////////////-->


    
    <script>
      $(document).ready( function () {
        $('#myTable').DataTable();
      });
    </script>

    <script>
      var el = document.getElementById("wrapper");
      var toggleButton = document.getElementById("menu-toggle");
      toggleButton.onclick = function () {
        el.classList.toggle("toggled");
      };
    </script>
    
    <!--//////////////////// LINK TO FORM.JS /////////////////////////////-->
    <script src="../javascript/form.js"></script>
    <!--//////////////////// LINK TO SIDEBAR.JS /////////////////////////////-->
    <script src="../javascript/sidbar.js"></script>
    <!--//////////////////// LINK PAGINATION PLUGIN /////////////////////////////-->
    <script src="cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <!--//////////////////// LINK BOOTSTRAP /////////////////////////////-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

</body>
