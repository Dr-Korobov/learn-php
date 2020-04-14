<html>
    <head></head>    
    <body>
        <?php
            $name = $_GET['name'];

            if ($name == null) {
                $name = "me";
            }

            echo "One for $name, one for me";
        ?>        
    </body>
<html>
