<?php 
	$sever = 'localhost';
	$server_user = 'root';
	$database = 'webcdmm2';
	$server_pass = '';
	$connect = mysqli_connect($sever, $server_user, $server_pass, $database);
	require("database.php");
	if(isset($_GET["id"]))
	{	
		$id = $_GET["id"];
		$sql = "DELETE FROM course WHERE courseID=" . $id;
		mysqli_query($connect,$sql);
	}
?>