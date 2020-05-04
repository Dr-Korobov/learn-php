<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8"/>
            <title>C_to_F</title>  
    </head>
    <body>
                <?php
            $C=$_POST['c'];
            $F=$_POST['f'];

            if ($F== null){
                $F= $C*1.8+32;
                
            }
            if ($C== null){
                $C= ($F-32)/1.8;
            }
            
            
        ?> 
         <form method='POST'>
            <label>&deg;C</label>
            <input type="text" name="c" value= <?php echo $C;?>>
            <button type="submit">Convert</button>
            <label>&deg;F</label>
            <input type="text" name="f" value= <?php echo $F; ?>>
         </form>

            

    </body>
 </html>
       


