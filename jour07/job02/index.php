<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	
	if(!isset($_COOKIE["nbvisites"]))
	{
		setcookie("nbvisites", 0, 0);
		$nbvisites = $_COOKIE["nbvisites"];
	}
	else
	{
		$nbvisites = $_COOKIE["nbvisites"];
		$nbvisites ++;
		setcookie("nbvisites", $nbvisites, 0);
		echo $_COOKIE["nbvisites"];
	}
	
	if(isset($_GET["resetBtn"]))
	{
		setcookie("nbvisites",0, 0);
		header("location:index.php");
	}
	
?>
 
 <form action="" method="get">
	<input type="submit" value="Reset" name="resetBtn"/>
 </form>
</body>
</html>