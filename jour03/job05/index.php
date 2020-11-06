<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	
	$str = "On n'est pas le meilleur quand on le croit mais quand on le sait."; // Phrase donnée
	$dic = array("voyelles"=>array("a","e","i","o","u","y","A","E","I","O","U","Y"), // "Dictionnaire de voyelles
				 "consonnes"=>array("q","w","r","t","p","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m")); //Dictionnaire de consonnes
				 
	$voyelles = 0; //Compte de voyelles
	$consonnes = 0;//Compte de consonnes
	
	$stats=0;//Caractère actuel dans $str
	while($stats<=63) // Tant que le compte de caractère actuel n'est pas arrivé à 63
	{
		$subStats = 0; //Caractère actuel utile à comparaison pour $voyelle
		while($subStats<=11)// Jusqu'à 11 comparaisons
		{
			if($dic["voyelles"][$subStats]==$str[$stats]) // Si le caractère actuel présent dans le $dic "voyelles" correspond au caractère actuel dans phrase donnée dans $str...
			{
				$voyelles ++;//... Compte une voyelle de plus en l'ajouttant a la valeur de $voyelles
			}
			
			$subStats++; //Passage au caractère de comparaison suivant
		}
		$subStats1 = 0; //Caractère actuel utile à comparaison pour $consonnes
		
		while($subStats1<=19) //Jusqu'à 19 comparaisons
		{
			if($dic["consonnes"][$subStats1] == $str[$stats]) //Si le caractère actuel présent dans le $dic "consonnes" correspond au caractère actuel dans phrase donnée dans $str...
			{
				$consonnes++; // ... ... Compte une voyelle de plus en l'ajouttant a la valeur de $consonnes
			}
			$subStats1++; //Passage au caractère de comparaison suivant
		}
		$stats++; //Passage au caractère de $str suivant
	}
	
	////////// Tableau affichant les résultats de comptes pour voyelles et consonnes ////////
	echo "<table> 
			<thead>
				<th>Consonnes</th>
				<th>Voyelles</th>
			</thead>
			<tbody>
				<tr>
					<td>".$consonnes."</td>
					<td>".$voyelles."</td>
				</tr>
			</tbody>
	      </table>";

?>
</body>
</html>