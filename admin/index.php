<?php include '../config/config.php'; ?>
<html lang="en">
	<head>
		<title>
				Admin Login
		</title>

		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src = "../js/bootstrap.js"></script>
	</head>

	<body>
		<div class="container jumbotron">
		<center><h2>Admin Portal</h2></center><br>
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="post">
					<center>
						<input type="text" class="form-control" name="username" placeholder="Admin ID"><br>
						<input type="password" class="form-control" name="password" placeholder="Password"><br>
						<button type="submit" name="login" class="form-control btn btn-success">Login</button>
					</center>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
	</body>
</html>


<?php 
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$select = "SELECT * FROM `admins` WHERE username = '$username'";
		$result = mysql_query($select);
		$res = mysql_fetch_assoc($result);

		$username_db = $res["username"];
		$password_db = $res["password"];

		if ($res) {
			$_SESSION['admin'] = $username;
			header("location:orders.php");
		}else{
			echo "<script>alert('Please Check your username and password');</script>";
		}
	}
?>

