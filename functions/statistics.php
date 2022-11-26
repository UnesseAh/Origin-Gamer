<?php
include('../connection/database.php');

/*********************************************************************************************************************/
/*/////////////////////////////////////////////  Total products Function  ////////////////////////////////////////////*/
/*********************************************************************************************************************/
function totalProducts(){

    global $connect;

    $sql = "SELECT COUNT(name) as total FROM products";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row["total"];
}

/*********************************************************************************************************************/
/*/////////////////////////////////////////////  Total Quantities Function  ////////////////////////////////////////////*/
/*********************************************************************************************************************/

function totalQuantities(){
    global $connect;

    $sql = "SELECT SUM(quantity) as total FROM products ";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row["total"];

}

/*********************************************************************************************************************/
/*/////////////////////////////////////////////  Categories Function  ////////////////////////////////////////////*/
/*********************************************************************************************************************/

function statistics($category){
    
    global $connect;

    $sql = "SELECT COUNT(name) as total FROM products where id_category = $category";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row["total"];

}


?>