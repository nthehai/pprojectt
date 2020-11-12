<?php 
 	session_start();
 	if(isset($_SESSION['role'])){
 		if ($_SESSION['role'] != 1) {
 			header('Location: login.php');
 		}
 	} else {
 		header('Location: login.php');
 			}
 ?>

 <?php 
  	include('inc/myconnect.php');
	include('inc/check.php');
 	if (isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min_range' => 1))) {
		$id = $_GET['id'];
		$query="UPDATE donxin SET trangthai = 1 WHERE id='{$id}'";
		$result = mysqli_query($dbc,$query);
		check($result,$query);
		header('Location:admin.php');
	} 
?> 