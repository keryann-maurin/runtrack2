<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$count = 1; 
$switch = 2; 

$output = "";

while($count<=59)
{
    if ($switch==60)
    {
        $output = $output.$str[0];
        break;
    }
    
    
    $output = $output.$str[$switch].$str[$count];
    
    $count+=2;
    $switch+=2;
}

echo $str."<br/>";
echo $output;

?>
</body>
</html>