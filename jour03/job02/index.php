<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$sentance = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie."; //Phrase donnée

$stats = 0; //Décompte du nombre de caractère, "T" vallant 0

while($stats<=76) //Tant que le compte n'est pas arrivé à 76
{
    echo $sentance[$stats]; // Affichage du caractère actuel dans $sentance
    $stats+=2; //Ajoutte +2 au compte, sautant un caractère.
}

?>
</body>
</html>