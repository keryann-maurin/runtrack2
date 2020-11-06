<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$numbers = array(200, 204, 173, 98, 171, 404, 459);
$stats = 0; //Compte de nombre, partant de la valeur 0 pour "200"
while($stats<=6) //Tant que le compte n'est pas arrivé à 6
{
	if($numbers[$stats]%2==0) // Si le reste modulo de $numbers "X" est égal à 0
	{
		echo $numbers[$stats]." est Paire."; //Affiche le nombre comme étant pair
	}
	else //Sinon...
	{
		echo $numbers[$stats]." est Impaire."; //...affiche le nombnre comme étant impair
	}
	echo "<br/>"; //Simple retour à la ligne
	$stats ++; //Passe au nombre suivant
}
?>
</body>
</html>