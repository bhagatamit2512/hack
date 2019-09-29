<?php
	session_start();
	require_once 'back.php';


	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
		$sql = "DELETE FROM category WHERE id='$id'";
		if(mysql_query($sql)){
			header('location:categories.php');
		}
	}else{
		header('location: categories.php');
	}
?>
