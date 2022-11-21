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

            <td scope="row">'.$row['id'].'</td>
            <td class=" imageProduct"><img src="../assets/img/'.$row['image'].'" alt=""></td>
            <td class="nameProduct">'.$row['name'].'</td>
            <td class="categoryProduct">'.$row['category'].'</td>
            <td class="quantityProduct">'.$row['quantity'].'</td>
            <td class="priceProduct">'.$row['price'].'</td>
            <td>
            <form action="editform.php" method="post">
                <input type="hidden" name="id" value="'.$row['id'].'">
                <button type="submit" class="btn btn-success" >Update</button>
                <button name="deleteProduct" type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>

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

    $sql = "UPDATE products SET image = '$picture', name = '$name', id_category = '$category', quantity = '$quantity', price = '$price' WHERE id = '$id'";
    move_uploaded_file($image, '../assets/img/'.$picture);
    mysqli_query($connect, $sql);
    header('location: ../pages/dashboard.php');
}



