<!DOCTYPE HTML>
<?php  
    require ('product.php');    
    $val = new Product();
    $values = json_decode($val->getProducts(),true);
?>
            
<html>  
    <head>  
        <title> Show data </title>
    </head>
    <body>
        
        <section> 
            <?php foreach($values as $v):?>
                <ol>
                    <li><?php echo $v['PRODUCT_NAME'];?></li>
                    <li><?php echo $v['COST_PRICE'];?></li>
                    <button class="detail" value="<?php echo $v['PRODUCT_ID'];?>">Details</button>
                </ol>
            <?php endforeach;?>
        </section>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </body>


</html>