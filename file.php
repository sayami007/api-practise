<?php
    require('connection.php');

    $id = $_GET['id'];
    $query = 'SELECT * FROM '.$table.' WHERE PRODUCT_ID = '.$id;    

    $result = $con->query($query);
    $json_array = array();
  
    if($result->num_rows > 0){
        while($value= $result->fetch_assoc()){
            $json_array = $value;
        }
    }

    echo json_encode($json_array);
?>