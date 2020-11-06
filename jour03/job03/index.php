<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	$str="I'm sorry Dave I'm afraid I can't do that."; // Phrase donnée
	
	$voyelle=array("a","e","i","o","u","y","A","E","I","O","U","Y"); // "Base de donnée" des voyelles
	
	$stats=0; //Compte des caractère au total 
	
	while($stats<=41) //Tant que le compte n'est pas arrivé à 41
	{
		$subStats=0; // Variable pour le compte des voyelles dans $voyelle
		while ($subStats<=11) // Tant que le compte dans $voyelle n'est pas arrivé à 11
		{
			if($voyelle[$subStats] == $str[$stats]) //Si le caractères dans $subStats enumérés dans $voyelles correspond au caractère dans $str enumérés dans $stats
			{
				echo $str[$stats]; // Affiche le dis Caractère
			}
			$subStats++; // Passage au caractère dans $voyelle suivant avec la variable $subStats
		}
		$stats++; // Passage au caractère dans $str suivant avec la variable $stats
	}


?>
</body>
</html>