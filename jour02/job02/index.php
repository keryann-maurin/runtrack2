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
            $y = false;
            while ($x <= 1337){
                
                switch( $x ) 
                {
                  case 26: // si $x vaut 26
                    echo ($y). '</br>';
                    break;
                
                  case 37: // si $x vaut 37
                    echo ($y). '</br>';
                    break;
                
                  case 88: // si $x vaut 88
                    echo ($y). '</br>';
                    break;

                  case 1111: // si $x vaut 88
                    echo ($y). '</br>';
                    break;
                
                  case 3233: // si $x vaut 88
                    echo ($y). '</br>';
                    break;
                
                  default: // Dans tout les autres cas
                    echo ($x). '</br>';
                }
                $x++;
            }
                ?>
</body>
</html>