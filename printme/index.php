<?php include '../config/config.php'; ?>


<!doctype html>
	<html lang="en">
		<html>
			<head>
				<title>
						Print Me | Printing Engine at FPS
				</title>

				<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
				<link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css ">
		
			 <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
			 <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

			</head>

			<body>
			<?php include '../header/header.php'; ?>
		


			<div class="container">
			<div class="row">
			<center>
				<img class="img-responsive" src="../img/print_icon.svg">
			</center>
			</div>
			<div class="row">
				<center>
				<h3><em>Instructions</em><h3>
				</center>
				<div class="col-md-2"></div>
				<div class="col-md-8">
				<ol>
					<li>Lorem Ipsum is the best thing in this world and is th standard typographic font in the world. is th standard typographic font in the world</li><br>
					<li>Lorem Ipsum is the best thing in this world and is th standard typographic font in the world. is th standard typographic font in the world</li><br>
					
					<li>Lorem Ipsum is the best thing in this world and is th standard typographic font in the world. is th standard typographic font in the world</li><br>
					<li>Lorem Ipsum is the best thing in this world and is th standard typographic font in the world. is th standard typographic font in the world</li><br>
					<li>Lorem Ipsum is the best thing in this world and is th standard typographic font in the world</li><br>
					<li>Lorem Ipsum is the best thing in this world and is th standard typographic font in the world</li>
				</ol>
<br>

				<center>
					<?php 
						if (isset($_SESSION['id'])) { ?>
							<a href="upload.php" class="btn btn-primary" > Proceed </a>
						<?php }else{ ?>
							<div class="jumbotron">
								<p>Please <a href="../login">Login</a> to place the order</p>
							</div>
						<?php }
					?>
					<br>
				</center> 
				<center></center>
			    </div>
			    <div class="col-md-2"></div>
			</div>
			</div>
<?php include '../footer/index.php'; ?>

			</body>
		</html>