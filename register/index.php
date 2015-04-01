<?php include '../config/config.php'; ?>


<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
		 <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<style>

		@charset "utf-8";
/* CSS Document */

/* ---------- FONTAWESOME ---------- */
/* ---------- http://fortawesome.github.com/Font-Awesome/ ---------- */
/* ---------- http://weloveiconfonts.com/ ---------- */

@import url(http://weloveiconfonts.com/api/?family=fontawesome);

/* ---------- ERIC MEYER'S RESET CSS ---------- */
/* ---------- http://meyerweb.com/eric/tools/css/reset/ ---------- */

@import url(http://meyerweb.com/eric/tools/css/reset/reset.css);

/* ---------- FONTAWESOME ---------- */

[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

/* ---------- GENERAL ---------- */

body {
	background-color: #C0C0C0;
	color: #000;
	font-family: "Varela Round", Arial, Helvetica, sans-serif;
	font-size: 16px;
	line-height: 1.5em;
}

input {
	border: none;
	font-family: inherit;
	font-size: inherit;
	font-weight: inherit;
	line-height: inherit;
	-webkit-appearance: none;
}

/* ---------- LOGIN ---------- */

#login {
	margin: 50px auto;
	width: 400px;
}

#login h2 {
	background-color: #f95252;
	-webkit-border-radius: 20px 20px 0 0;
	-moz-border-radius: 20px 20px 0 0;
	border-radius: 20px 20px 0 0;
	color: #fff;
	font-size: 28px;
	padding: 20px 26px;
}

#login h2 span[class*="fontawesome-"] {
	margin-right: 14px;
}

#login fieldset {
	background-color: #fff;
	-webkit-border-radius: 0 0 20px 20px;
	-moz-border-radius: 0 0 20px 20px;
	border-radius: 0 0 20px 20px;
	padding: 20px 26px;
}

#login fieldset p {
	color: #777;
	margin-bottom: 14px;
}

#login fieldset p:last-child {
	margin-bottom: 0;
}

#login fieldset input {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}

#login fieldset input[type="email"], #login fieldset input[type="password"], #login fieldset input[type="text"] {
	background-color: #eee;
	color: #777;
	padding: 4px 10px;
	width: 328px;
}

#login fieldset input[type="submit"] {
	background-color: #33cc77;
	color: #fff;
	display: block;
	margin: 0 auto;
	padding: 4px 0;
	width: 100px;
}

#login fieldset input[type="submit"]:hover {
	background-color: #28ad63;
}
	</style>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

	<div id="login">
				<center>
				<img src="../img/fivepointsomething_logo.png" class="img-responsive"><br>
				<p style="style="font-family: 'Lobster', cursive;"">Fivepointsomething</p></center><br>
		<h2><span class="fontawesome-lock"></span>Register</h2>

		<form action="javascript:void(0);" method="POST">

			<fieldset>

				<p><label for="email">E-mail address</label></p>
				<p><input type="email" id="email" placeholder="mail@example.com" ></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

				<p><label for="password">Password</label></p>
				<p><input type="password" id="password" placeholder="password" ></p> <!-- JS because of IE support; better: placeholder="password" -->

				<p><label for="Name">Name</label></p>
				<p><input type="text"  placeholder="Roger Patel" ></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->
				
				<p><label for="phone">Phone</label></p>
				<p><input type="text" id="name" placeholder="9999912345"></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

		
				<p><input type="submit" value="Sign In"></p>
</p><br><p>Already have an account? <a href="../login" style="color:#F95252">Sign In</a></p>
			</fieldset><br><br>

		<center>	<p>&copy; 2015 All Rights Reserved. <br> <a href="#" style="color:#0D7CAD">Privacy Policy</a> &nbsp; <a href="#" style="color:#0D7CAD">Terms Of Use</a></p>   </center>

		</form>

	</div> <!-- end login -->

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