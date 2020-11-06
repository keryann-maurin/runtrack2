<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$str = "Les choses que l'on possede finissent par nous posseder.";

$stats=55; //Calcul automatique de la valeur de $stats en fonction du nombre de caractère dans $str
$reverse = ""; //Valeur actuelle de la phrase inversée

while($stats>=0) //Tant que stats n'est pas à 0
{
    $reverse = $reverse.$str[$stats]; //Ajout du caractère actuel de $str basé sur $stats
    $stats--; // Passage au caractère précédent dans $stats
}

echo $str;
echo "<br>".$reverse; //Affiche la phrase donnée suivie de son inversée


?>
</body>
</html>