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

#login fieldset input[type="email"], #login fieldset input[type="password"] {
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
<div class="container">
	<div id="login">
				<center>
				<img src="../img/fivepointsomething_logo.png" class="img-responsive"><br>
				<p style="style="font-family: 'Lobster', cursive;"">Fivepointsomething</p></center><br>
		<h2><span class="fontawesome-lock"></span>Sign In</h2>

		<form action="javascript:void(0);" method="POST">

			<fieldset>

				<p><label for="email">E-mail address</label></p>
				<p><input type="email" id="email" value="mail@address.com" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''"></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

				<p><label for="password">Password</label></p>
				<p><input type="password" id="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->

				<p><input type="submit" value="Sign In" name="login"></p>
</p><br><p>Don't have an account? <a href="../register" style="color:#F95252">Register Here</a></p>
			</fieldset><br><br>

		<center>	<p>&copy; 2015 All Rights Reserved. <br> <a href="#" style="color:#0D7CAD">Privacy Policy</a> &nbsp; <a href="#" style="color:#0D7CAD">Terms Of Use</a></p>   </center>

		</form>

	</div> <!-- end login -->
</div>
</body>	
</html>



<?php 
	if (isset($_POST['login'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$select = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'" ;
			$result = mysql_query($select);
			$res = mysql_fetch_assoc($result);
			
			if ($res) {
				$verified = $res['verified'];
				if ($verified == 'yes') {
					$id = $res['id'];
					$email = $res['email'];
					$name = $res['name'];
					$wallet = $res['wallet'];

					$_SESSION['id'] = $id;
					$_SESSION['name'] = $name;

					header("location:../index.php");
				}else{
					echo "<script>alert('Your account is not verified. Please check your email for confirmation link.');</script>";
				}
			}else{
				echo "<script>alert('Incorrect email or password. Please try again');</script>";
			}
		}	
?>