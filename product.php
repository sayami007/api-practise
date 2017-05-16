<?php
    class Product{ 
        
        
        
        public function getProducts(){
            require('connection.php');
            $query = 'SELECT * FROM '.$product;
            $result = $con->query($query);
            $product_json = array();
            if($result->num_rows > 0){
                while($value= $result->fetch_assoc()){
                    $row_array['PRODUCT_ID'] = $value['PRODUCT_ID'];
                    $row_array['PRODUCT_NAME'] = $value['PRODUCT_NAME'];
                    $row_array['PRODUCT_DESCRIPTION'] = $value['PRODUCT_DESCRIPTION'];
                    $row_array['COST_PRICE'] = $value['COST_PRICE'];
                    array_push($product_json,$row_array);
                }
            }
            return json_encode($product_json);
        }





        public function getProductById($id){
            require('connection.php');
            $query = 'SELECT * FROM '.$product.' WHERE PRODUCT_ID = '.$id;    

            $result = $con->query($query);
            $product_json = array();

            if($result->num_rows > 0){
                while($value= $result->fetch_assoc()){
                   $product_json = $value;
                }
            }
            return json_encode($product_json);
        }  
    }
?>