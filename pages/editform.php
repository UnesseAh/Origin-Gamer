<?php
$pagetitle = 'EDIT FORM'; 

include('../includes/head.php');
include('../connection/database.php');

$id = $_POST['id'];
$sql = "SELECT * FROM products WHERE id = '$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

?>

<div class="row d-flex  align-items-center justify-content-center mx-2" style="min-height: 100vh">
            <div class="col-lg-7 col-md-8 col-sm-8 col-xsm">
                <form action="../functions/crud.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="form-group">
                        <label for="name" class="form-label fw-bold">Name</label>
                        <input value="<?php echo $row['name'] ?>" name="name" type="text" id="name" class="form-control" placeholder="Enter the name of the product"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label fw-bold">Please select</label>
                        <select name="category" class="form-control" id="product-type">
                            <option value="1" <?php echo $row['id_category'] == 1 ? 'selected' : '' ?>>game</option>
                            <option value="2" <?php echo $row['id_category'] == 2 ? 'selected' : '' ?>>keyboard</option>
                            <option value="3" <?php echo $row['id_category'] == 3 ? 'selected' : '' ?>>mouse</option>
                            <option value="4" <?php echo $row['id_category'] == 4 ? 'selected' : '' ?>>monitor</option>
                            <option value="5" <?php echo $row['id_category'] == 5 ? 'selected' : '' ?>>laptop</option>
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
                            <img  <?php echo 'src="../assets/img/'.$row['image'].'"'?> style="width:100px;height:100px;" alt="photo">
                        </div>
                        <input  name="image" type="file" accept=".jpg, .png, .jpeg" class="form-control">
                    </div>
                        <div class="mt-4 form-group d-flex justify-content-end">
                            <button name="updateProduct" type="submit" class="me-1 btn btn-warning">Update</button>
                            <a href="dashboard.php" class="me-1 btn btn-dark">Return</a>
                        </div>
                </form>
            </div>
</div>