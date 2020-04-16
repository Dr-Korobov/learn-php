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
            
            if (!is_numeric($discount)) {
                $twd=$total;
            }

                 //localhost:8080/?product=antiseptic&price=50&qty=2&discount=30 
        ?>        
            <table border= "2">
                <caption>RECEIPT</caption>
                <tr>
                    <th>Product Name</th>
                    <th>Unit Cost</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Total with discount</th>
                </tr>
                <tr>
                    <td><?php echo $product ?></td>
                    <td><?php echo $price ?></td>
                    <td><?php echo $qty ?></td>
                    <td><?php echo $total ?></td>
                    <td><?php echo $twd ?></td>
                </tr>

            </table>
    </body>
<html>
