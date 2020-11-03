<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 1;
        $y = 3;
        $z = 5;
        while($x <= 100){
            if($x % $y == 0 && $x % $z == 0){

                echo "FizzBuzz".'</br>';
            }
            elseif($x % $y == 0){
                
                echo "Fizz".'</br>';
            }
            elseif($x % $z == 0){

                echo "Buzz".'</br>';
            }
            else{

                echo $x.'</br>';
            }
            $x++;



        }



?>
</body>
</html>