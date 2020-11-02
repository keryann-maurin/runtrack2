<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack 2</title>
</head>
<body>
    <?php
    $myBool = true;
    $number = 9;
    $cchain = "Coucou";
    $fnumber= 1.9;
    ?>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Type</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Booléen</td>
            <td><?php echo gettype($myBool)?></td>
            <td><?php echo $myBool?></td>
        </tr>
        <tr>
            <td>Entier</td>
            <td><?php echo gettype($number)?></td>
            <td><?php echo $number?></td>
        </tr>
        <tr>
            <td>Chaine de caractère</td>
            <td><?php echo gettype($cchain)?></td>
            <td><?php echo $cchain?></td>
        </tr>
        <tr>
            <td>Nombre Décimal</td>
            <td><?php echo gettype($fnumber)?></td>
            <td><?php echo $fnumber?></td>
        </tr>
    </tbody>
</table>
    
</body>
</html>