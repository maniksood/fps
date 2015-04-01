<?php include '../config/config.php'; ?>


<!doctype html>
	<html lang="en">
		<html>
			<head>
				<title>
						Register | FPS
				</title>

				<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
				<link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css ">
		
			 <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
			 <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

			</head>

			<body>

			
			

			<div class="container">
			<div class="row">
			<center>
				<img class="img-responsive" src="../img/print_icon.svg">
			</center>
			</div>
			<div class="row">
				<center>
				<h3><em>Login</em><h3>
				</center>
				<form action="" method="post">
					<div class="col-md-4"></div>
					<div class="col-md-4">
					<label for="inputEmail">Name*</label>
					<input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required="required">
					<label for="inputEmail">Phone*</label>
					<input type="text" name="phone" id="inputPhone" class="form-control" placeholder="Phone" required="required">
					<label for="inputEmail">Email*</label>
					<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required="required">
					<label for="inputPassword">Password*</label>
					<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required"><br>
					<center><button type="submit" class="btn btn-primary" name="register">Register</button></center>
				</form>
<br>
				
			    </div>
			    <div class="col-md-4"></div>
			</div>
			</div>

			</body>
		</html>



<?php 
	if (isset($_POST['register'])) {
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirmationCode = md5(rand());

			$select = "SELECT * FROM `users` WHERE email = '$email'" ;
			$result = mysql_query($select);
			$res = mysql_fetch_assoc($result);
			
			if ($res) {
					echo "<script>alert('The email id $email is already registered. Please enter another email.');</script>";
			}else{
					mysql_query("INSERT INTO `users`(`id`, `name`, `phone`, `email`, `password`, `confirmation_code`) VALUES ('','$name','$phone','$email','$password','$confirmationCode')");
					echo "<script>alert('Please check your email for verification link and verify your email address');</script>";
					// header("location:../index.php");
			}
		}	
?>