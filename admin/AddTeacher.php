			
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<h2>ADD TEACHER</h2>
                    <form action="" method="post">
                        <table width="50%" border="10">
						<thead>
							<tr>
                                <td>ID</td>
                                <td><input type="num" name ="accountID"></td>
                            </tr>

                            <tr>
                                <td>Name Account</td>
                                <td><input type="text" name ="username"></td>
                            </tr>

                            <tr>
                                <td>Password</td>
                                <td><input type="text" name ="password"></td>
                            </tr>

                            <tr>
                                <td>Role</td>
                                <td><input type="text" name ="roleID"></td>
                            </tr>
							
							<tr>
                                <td>Full Name</td>
                                <td><input type="text" name ="aName"></td>
							</tr>
							<tr>
                                <td>Age</td>
                                <td><input type="text" name ="aAge"></td>
							</tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit"></td>
                            </tr>
						</thead>
						<?php 
								$sever = 'localhost';
								$server_user = 'root';
								$database = 'webcdmm2';
								$server_pass = '';
								$connect = mysqli_connect($sever, $server_user, $server_pass, $database);
								require("database.php");  
								if(isset($_POST["submit"]))
								{
									$id = $_POST["accountID"];
									$user = $_POST["username"];
									$password = $_POST["password"];
									$roleID = $_POST["roleID"];
									$aName = $_POST["aName"];
									$age = $_POST["aAge"];

									if ($id ==""||$user ==""||$password == ""|| $roleID == ""||  $aName == "" || $age == "") 
										{
											echo "Please fill the blank!";
										}
									else
										{
											$sql = "select * from account where username= '$user'";
											$query = mysqli_query($connect, $sql);
											if(mysqli_num_rows($query)>0)
											{
												echo "Account already available!";
											}
											else
											{
												$sql = "INSERT INTO `account`(`accountID`, `username`, `password`, `roleID`, `aName`, `aAge`) VALUES('$id', '$user', '$password', '$roleID', '$aName', '$age')";
												mysqli_query($connect,$sql);
												header("Location: http://localhost:8090/webofgroupkhai/WebOfGroup-khai/admin/admin.php ");
											}
										}
								}
						?>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>