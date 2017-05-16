<?php
    $database = 'product_database';
    $product = 'product';
    $user = 'user';
    $host = 'localhost';
    $username = 'root';
    $password = '';

    $con =new mysqli($host,$username,$password,$database);
    
    if($con->connect_error){
        die('Connection failed '.$con->connect_error);
    }
?>