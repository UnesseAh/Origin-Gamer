<?php
$pagetitle = 'EDIT FORM'; 

include('../includes/head.php');
include('../connection/database.php');

$id = $_POST['id'];
$sql = "SELECT * FROM products WHERE id = '$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

?>

<div class="row d-flex row align-items-center justify-content-center mx-2" style="min-height: 100vh">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xsm">
                <form id="edit-form" action="../functions/crud.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="">
                    <div class="form-group">
                        <label for="name" class="form-label fw-bold">Name</label>
                        <input value="<?php echo $row['name'] ?>" name="name" type="text" id="name" class="form-control" placeholder="Enter the name of the product"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label fw-bold">Please select</label>
                        <select name="selectproduct" class="form-control" id="product-type">
                            <option value="1"                         <?php echo $row['category'] == 3 ? selected : '' ?>>game</option>
                            <option value="2">keyboard</option>
                            <option value="3">mouse</option>
                            <option value="4">monitor</option>
                            <option value="5">laptop</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="form-label fw-bold">Quantity</label>
                        <input value="<?php echo $row['quantity'] ?>" name="quantity" type="number" id="quantity" class="form-control" placeholder="Enter the quantity the product "/>
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-label fw-bold">Price</label>
                        <input value="<?php echo $row['price'] ?>" name="price" type="number" id="price" class="form-control" placeholder="Enter the price the product"/>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label fw-bold">Picture</label>
                        <div>
                            <!-- <input name="oldimage" type="hidden" > -->
                            <img  style="width:100px;height:100px;" alt="photo">
                        </div>
                        <input  name="image" type="file" accept=".jpg, .png" class="form-control" id="product-file" value="x.jpg" >
                    </div>
                    <!-- <div class="mt-4 form-group d-flex  flex-row-reverse"> -->
                        <div class="mt-4 form-group d-flex justify-content-end">
                            <input id="update-form" name="update" type="submit" class="me-1 btn btn-warning" value="Update">
                            <a href="dashboard.php" class="me-1 btn btn-dark">Return</a>
                        </div>
                </form>
            </div>
</div>