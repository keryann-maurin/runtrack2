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
	if(!isset($_SESSION["nameList"]))
	{
		$_SESSION["nameList"] = array();
	}
	
	
	if(isset($_GET["submitBtn"]))
	{
		array_push($_SESSION["nameList"], $_GET["name"]);
		

		header("location:index.php");
		
	}
	
	if(isset($_GET["resetBtn"]))
	{
		session_destroy();
		header("location:index.php");
	}
	
	
	if ( count($_SESSION["nameList"]) > 0 )
	{
		$i = 0;
		while($i < count($_SESSION["nameList"]))
		{
			echo $_SESSION["nameList"][$i]."<br/>";
			
			$i ++;
		}		
	}


?>



<form action="" method="get">

	<input type="text" name="name"/>
	<input type="submit" name="submitBtn"/>
	<input type="submit" value="reset" name="resetBtn"/>

</form>
</body>
</html>