<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	
	$str="Dans l'espace, personne ne vous entend crier."; //La Phrase donnée
	
	$stats=0; //Compte de départ pour le nombre de caractère
	
	while($stats<=44) //Tant que le compte n'est pas arrivé à 44
	{
		echo "<b>".$str[$stats]."</b> est le caractère n°<b>".$stats.'</b></br>'; //Affiche chaque caractère et donne le compte actuel
		$stats++; //ajoute +1 au compte actuel
	}
	
	echo "<br/><b>Il y a ".$stats." caractères au total.</b>"; //Donne le nombre total de caractère


?>
</body>
</html>