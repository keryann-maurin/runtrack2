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
            while ($x <= 100){
                
                switch( $x ) 
                { case ($x >= 0 && $x <= 20): // si $x est inferieur ou égal à 20
                    echo '<i>'.($x).'</i>'. '</br>'; //affichage en italique
                    break;

                  case ($x === 42): // si $x vaut 42
                    echo "LaPlateforme_". '</br>';
                    break;

                  case ($x >= 25 && $x <= 50): // si $x est compris entre 25 & 50
                    echo '<u>' .($x). '</u>'. '</br>';
                    break;
                
                  default: // Dans tout les autres cas
                    echo ($x). '</br>';
                }
                $x++;
            }
                ?>
</body>
</html>