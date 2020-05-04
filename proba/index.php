<html>
    <head></head>    
    <body>
        <?php
            $C=$_GET['c'];
            $F=$_GET['f'];

            if ($F== null){
                $F= $C*1.8+32;
                echo $F;
                exit;
            }
            if ($C== null){
                $C= ($F-32)/1.8;
                echo $C;
                exit;
            }
            
            
        ?>        
    </body>
<html>
