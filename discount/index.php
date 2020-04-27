<html>
    <head></head>    
    <body>
        <?php
            $product = $_GET['product'];
            $price= $_GET['price'];
            $qty= $_GET['qty'] ;            
            $discount= $_GET['discount'];

            if (!is_numeric($price)){
                echo 'Price is not a number!';
                exit;
             }        

            if (!is_numeric($qty)){
                echo 'Quantity is not a number!';
                exit;
             }  

            if ($price <= 0){
                echo 'Price is not a positive number or equalto zero!';
                exit;
             }  

            if ($qty <= 0){
                echo 'Quantity is not a positive number or equalto zero!';
                exit;
             }              

            $total = $qty * $price;
                    //total with discount - twd;
            $twd= $total*(1-$discount/100);

                 //localhost:8080/?product=antiseptic&price=50&qty=2&discount=30 
        ?>        
            <table border= "2">
                <caption>RECEIPT</caption>
                <tr>
                    <th>Product Name</th>
                    <th>Unit Cost</th>
                    <th>Quantity</th>
                    <th>Total</th>
                <?php 
                        if ($discount >0){
                            echo '<th>Total with discount</th>';
                                                                                                
} ?>
                    
                </tr>
                <tr>
                    <td><?php echo $product ?></td>
                    <td><?php echo $price ?></td>
                    <td><?php echo $qty ?></td>
                    <td><?php echo $total ?></td>
                <?php 
                        if ($discount >0){
                            echo '<td>'.$twd.'</td>';
                                                                                                
} ?>
                    
                    
                </tr>

            </table>
    </body>
<html>
