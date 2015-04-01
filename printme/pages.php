	
<?php include '../config/config.php'; ?>

<?php $file_name = $_SESSION['file_name']; ?>
<?php $wallet = $_SESSION['wallet']; ?>
<?php $id = $_SESSION['id']; ?>
<?php $email = $_SESSION['email']; ?>

<?php 
	// 
?>

<?php 
	function count_pages($pdfname) {
	  $pdftext = file_get_contents($pdfname);
	  $num = preg_match_all("/\/Page\W/", $pdftext, $dummy);
	  return $num;
	}
	$pages = count_pages('../print_uploads/'.$file_name);
	
 ?>

<!doctype html>
	<html lang="en">
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
			

<center>
	<?php 
		if (isset($_SESSION['id'])) { ?>
			<?php include '../header/header.php'; ?>
			

			<div class="container">
	<div class="jumbotron">
		<center>
			<?php 
				if ($wallet < $pages*2) {
					echo "<center>";
					echo "<h1>OOOPS....</h1>";
					echo "</center>";
					echo "<p>It seems that your wallet balance is insufficient. Your order have been received. <br> In order to complete the order, go to your ORDERS page and make the payment.</p>";
					echo "<br>";
					echo "<b><p>Please wait, you will redirected back in 10 seconds</p></b>";
					header("refresh:7, url=../myaccount/orders.php");
				}else{
					if ($pages == 0) {
					echo "<center>";
					echo "<h1>OOOPS....</h1>";
					echo "</center>";
					echo "<p>Your file is not uploaded. Your uploaded is file's extention may not be supported. Make Sure that your file extension is PDF</p>";
					echo "<br>";
					echo "<b><p>Please wait, you will redirected back in 5 seconds</p></b>";
					header("refresh:5, url=upload.php");
					}else{
						echo "<h2>Thank you for placing order...</h2>";
						echo "<p>Number of Pages: ".$pages;
						echo "</p>";
						echo "<p>Total Price: 2 X ".$pages." = ".$pages*2;
						echo "</p>";
						$updated_wallet = $wallet - ($pages*2);
						$cost = $pages*2;

						mysql_query("UPDATE `users` SET `wallet`='$updated_wallet' WHERE id = '$id' ");
						mysql_query("UPDATE `print_orders` SET `money_status`='Paid', `pages`='$pages', `cost`='$cost' WHERE email = '$email' ORDER BY id DESC LIMIT 1");
						header("refresh:5, url=../myaccount/orders.php");


						}
					}
			?>
		</center>
	</div>
</div>

		<?php }else{ ?>
			<div class="jumbotron">
				<center>
					<div class="jumbotron">
					<p>It seems that you haven't Login. Please Login first.</p>
					<h2>You will be redirected to Login page in 5 seconds</h2>
					<?php header("refresh:5, url=../login"); ?>	
					</div>
				</center>
			</div>
		<?php }
	?>
	<br>
</center> 

		

			</body>
		</html>














