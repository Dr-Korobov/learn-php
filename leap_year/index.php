<html>
    <head></head>    
    <body>
        <?php
            $year= $_GET['year'];
            if ($year%400== 0){
                echo "$year is a leap year!";
                exit;
            }
            
            if ($year%4 == 0 and $year%100 != 0){
                echo "$year is a leap year!";
                exit;
            }
            else {
                echo "$year is NOT a leap year!";
            }
        ?>        
    </body>
<html>
