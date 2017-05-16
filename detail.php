<?php
    class Details{
        function __construct($id){
            require('product.php');
            $val = new Product();
            echo  $val->getProductById($id);
        }
    }
    $id = $_GET['id'];
    $val=new Details($id);
?>