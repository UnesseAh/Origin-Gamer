<?php

include('../connection/database.php');


if(isset($_POST['addProduct']))            addNewProduct();
if(isset($_POST['updateProduct']))         updateProduct();
if(isset($_POST['deleteProduct']))         deleteProduct();

/*********************************************************************************************************************/
/*/////////////////////////////////////////////  Display Function  //////////////////////////////////////////////////*/
/*********************************************************************************************************************/

function displayProduct()
{
    global $connect;

    $sql = "SELECT p.id, p.image, p.name, p.quantity, p.price, c.category
    FROM products as p
    INNER JOIN categories as c 
    ON p.id_category = c.id 
    ORDER BY p.id;";
    
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_assoc($result)){

        echo '<tr>

            <td class=" text-center" scope="row" style="height:60px;line-height:60px">'.$row['id'].'</td>
            <td class=" text-center imageProduct" style="height:60px;line-height:60px"><img src="../assets/img/'.$row['image'].'" alt=""></td>
            <td class="text-center nameProduct" style="height:60px;line-height:60px">'.$row['name'].'</td>
            <td class="text-center categoryProduct" style="height:60px;line-height:60px">'.$row['category'].'</td>
            <td class="text-center quantityProduct" style="height:60px;line-height:60px">'.$row['quantity'].'</td>
            <td class="text-center priceProduct" style="height:60px;line-height:60px">'.$row['price'].'$</td>
            <form action="editform.php" method="post">
            <td class="text-center" style="height:60px;line-height:60px">
                <input type="hidden" name="id" value="'.$row['id'].'">
                <button type="submit" class="btn btn-info rounded-pill mt-2 mb-1"  >Update</button>
                <button name="deleteProduct" type="submit" class="btn btn-danger mb-1 mt-2 rounded-pill">Delete</button>
            </td>
            </form>

        </tr>';
    }
}

/*********************************************************************************************************************/
/*/////////////////////////////////////////////  Save New Task Function  ////////////////////////////////////////////*/
/*********************************************************************************************************************/

function addNewProduct()
{
    global $connect;

    //Store the values from the inputs of the form into variables
    $picture = $_FILES['image']['name'];
    $image = $_FILES['image']['tmp_name'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $sql = "INSERT INTO products VALUES (null, '$picture', '$name', '$category', '$quantity', '$price')";
    move_uploaded_file($image,'../assets/img/'.$picture);
    mysqli_query($connect, $sql);
    header('location: ../pages/dashboard.php');
}

/*********************************************************************************************************************/
/*/////////////////////////////////////////////  Update Function  ///////////////////////////////////////////////////*/
/*********************************************************************************************************************/

function updateProduct()
{
    global $connect;

    $id = $_POST['id'];
    $picture = $_FILES['image']['name'];
    $image = $_FILES['image']['tmp_name'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    if(empty($picture)){
        $sql = "UPDATE products SET  name = '$name', id_category = '$category', quantity = '$quantity', price = '$price' WHERE id = '$id'";
        mysqli_query($connect, $sql);
        header('location: ../pages/dashboard.php');
    }else{
        $sql = "UPDATE products SET image = '$picture', name = '$name', id_category = '$category', quantity = '$quantity', price = '$price' WHERE id = '$id'";
        move_uploaded_file($image, '../assets/img/'.$picture);
        mysqli_query($connect, $sql);
        header('location: ../pages/dashboard.php');
    }
  
}


