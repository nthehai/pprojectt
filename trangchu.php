<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location:login.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="3;url=leave_request.php">
<title>Trangchu</title>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		
	}
	header{
		background-image: url(images/ANH9.jpg);
		background-size: cover;
		background-position: center;
		height: 100vh;
	}
	
	.content{
		text-align: center;
		color: blue;
		font-size: 30px;
	}
	
</style>

</head>
<body>
	
		 <header>		 	
		 </header>
		
	</body>

</html>
