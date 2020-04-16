<html>
    <head></head>    
    <body>
        <?php
            $product = $_GET['product'];
            $price= $_GET['price'];
            $qty= $_GET['qty'] ;
            $total = $qty * $price;
            $discount= $_GET['discount']; 
                    //total with discount - twd;
            $twd= $total*(1-$discount/100);

            if ($price <= 0 ||$qty <= 0 || !is_numeric($price) || !is_numeric($qty)){
                echo 'Invalid value';
                exit;
             }        
            

            //echo $product, $price, $qty, $total, $discount;
            echo "$twd \n $total";



                 //localhost:8080/?product=antiseptic&price=50&qty=2&discount=30 
        ?>        
    </body>
<html>
