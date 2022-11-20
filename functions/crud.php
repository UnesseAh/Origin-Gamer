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
        echo

        '
        <tr>
        <form action="form.php" method="post">

            <th scope="row">'.$row['id'].'</th>
            <td>'.$row['image'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['id_category'].'</td>
            <td>'.$row['quantity'].'</td>
            <td>'.$row['price'].'</td>
            <form action="crud.php" method="post">
            <td>
                <button class="btn btn-success">Update</button>
                <button name="deleteProduct" type="submit" class="btn btn-danger">Delete</button>
                <input type="hidden" name="id" value="'.$row['id'].'">
            </td>
                <input type="hidden" name="product-id" value="'.$row["id"].'">
            </form>

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