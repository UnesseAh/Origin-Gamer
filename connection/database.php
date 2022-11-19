<?php 

require '../vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $host = $_ENV['DB_HOST'];
    $user = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASSWORD'];
    $database = $_ENV['DB_DATABASE']; // enter the name of the database

    $connect = mysqli_connect($host, $user, $password, $database);

if(!$connect){

    die("Connection failed: " . mysqli_connect_error());
}

?>