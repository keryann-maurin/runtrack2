<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
            $x = 0;
            while ($x <= 1337){
            if(
                $x == 42
            )
                echo '<b><u>' .$x. '</u></b><br />';
            
            else
                echo $x. '<br />';
            
            
            $x++;
            }
        ?>
</body>
</html>