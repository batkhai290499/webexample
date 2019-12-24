<?php 
	// echo "Vao day";
	$sever = 'localhost';
	$server_user = 'root';
	$database = 'webcdmm2';
	$server_pass = '';
	$connect = mysqli_connect($sever, $server_user, $server_pass, $database);
	require("database.php");
	if(isset($_GET["id"]))
	{	
		$id = $_GET["id"];
		$sql = "DELETE FROM account WHERE accountID=" . $id;
		 //fucking awesome !!! I can't do it :v
		mysqli_query($connect,$sql);
		header("Location: http://localhost:8090/webofgroupkhai/WebOfGroup-khai/admin/admin.php ");
	}
?>