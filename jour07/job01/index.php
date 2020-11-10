<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

session_start();

if(!isset($_SESSION["nbvisites"]))
{
    $_SESSION["nbvisites"] = 0;
    echo $_SESSION["nbvisites"];
}
else 
{
    $_SESSION["nbvisites"] += 1;
    echo $_SESSION["nbvisites"];
}

if(isset($_GET["resetBtn"]))
{
    session_destroy();
    header("location:index.php");
}

?>

<form method="get" action="">
<input type="submit" value="Reset" name="resetBtn"/>
</form>
</body>
</html>