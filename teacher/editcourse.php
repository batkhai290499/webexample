			
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
				<h2>EDIT TEACHER</h2>
                    <form action="" method="post">
                        <table width="50%" border="10">
							<thead>
								<tr>
									<td>Course ID</td>
									<td><input type="num" name ="courseID"></td>
								</tr>

								<tr>
									<td>Course Name</td>
									<td><input type="text" name ="courseName"></td>
								</tr>

								<tr>
									<td>Category ID</td>
									<td><input type="text" name ="categoryID"></td>
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
													$id = $_POST["courseID"];
													$user = $_POST["courseName"];
													$password = $_POST["categoryID"];

													if ($id =="" || $user ==""|| $password == "") 
														{
															echo "Please fill the blank!";
														}
													else
														{
															$sql = "select * from account where username= '$user'";
															$sql = "UPDATE course SET courseID='$id',courseName='$user',categoryID='$password' WHERE courseID=" . $id;
															mysqli_query($connect,$sql);
															header("Location: http://localhost:8090/webofgroupkhai/WebOfGroup-khai/teacher/viewcourse.php?id=1 ");
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