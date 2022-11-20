<?php

include('../connection/database.php');


if(isset($_POST['addProduct']))        addNewProduct();
// if(isset($_POST['deleteProduct']))        deleteProduct();

/*********************************************************************************************************************/
/*/////////////////////////////////////////////  Display Function  //////////////////////////////////////////////////*/
/*********************************************************************************************************************/

function displayProduct()
{
    global $connect;

    $sql = "SELECT * FROM products 
    INNER JOIN categories ON products.id_category = categories.id";
    
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        '
        <tr id="'.$id.'">

            <th scope="row">'.$id.'</th>
            <td class="imageProduct">'.$row['image'].'</td>
            <td class="nameProduct">'.$row['name'].'</td>
            <td class="categoryProduct">'.$row['id_category'].'</td>
            <td class="quantityProduct">'.$row['quantity'].'</td>
            <td class="priceProduct">'.$row['price'].'</td>
            <form action="crud.php" method="post">
            <td>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="fullForm('.$id.')">Update</button>
                <button name="deleteProduct" type="submit" class="btn btn-danger">Delete</button>
            </td>

        </tr>';
    }
}

/*********************************************************************************************************************/
/*/////////////////////////////////////////////  Save New Task Function  ////////////////////////////////////////////*/
/*********************************************************************************************************************/

function addNewProduct() {
    global $connect;

    //Store the values from the inputs of the form into variables
    $image = $_POST['image'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products VALUES (null, '$image', '$name', '$category', '$quantity', '$price')";
    mysqli_query($connect, $sql);

    header('location: ../pages/dashboard.php');
}



/*********************************************************************************************************************/
/*/////////////////////////////////////////////  Update Function  ///////////////////////////////////////////////////*/
/*********************************************************************************************************************/

function updateProduct(){
    global $connect;

    $id = $_POST['id'];
    $image = $_POST['image'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "UPDATE products SET image = $ WHERE id = $id";
    mysqli_query($connect, $sql);
    headr(location: '../pages/dashboard.php')


}



/*********************************************************************************************************************/
/*/////////////////////////////////////////////  Delete Function  ///////////////////////////////////////////////////*/
/*********************************************************************************************************************/


    // function deleteTask()
    // {
    //     global $connect;

    //     $productId = $_POST["product-id"];
	// 	$sql = "DELETE FROM products WHERE id='$productId'";
    //     mysqli_query($connect,$sql);

    //     header('location: ../pages/dashboard.php');

    // }