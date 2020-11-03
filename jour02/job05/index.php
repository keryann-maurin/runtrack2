<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
for( $i = 1; $i <= 1000; $i++)
{
    $n = 0;
    
    for( $j = 1; $j <= $i; $j++)
    { // début de la seconde boucle
        if($i % $j == 0){
            $n++;
        }
        
        elseif($n == 1){
            echo $i.'</br>';
        break;

        }
    
}


}
?>
</body>
</html>