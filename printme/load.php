<?php include '../config/config.php'; ?>



<?php 
	function count_pages($pdfname) {
	  $pdftext = file_get_contents($pdfname);
	  $num = preg_match_all("/\/Page\W/", $pdftext, $dummy);
	  return $num;
	}
 ?>
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



<?php 
	if (isset($_SESSION['id'])) { ?>
		<!doctype html>
	



			<div class="container">
			<div class="row">
			<center><br><br>
				<img class="img-responsive" src="../img/load.svg">
			</center>
			</div>
			<div class="row">
				<center>
				
				</center>
				<div class="col-md-2"></div>
				<div class="col-md-8">
				
				<center><br><h3>Please wait while we process the document uploaded by you.</h3><br> Do not press Refresh or Back button</center>
<br>
				
			    </div>
			    <div class="col-md-2"></div>
			</div>
			</div>

			
<?php header("refresh:3, url=pages.php"); ?>	
	<?php }else{ ?>
		<center>
			<div class="jumbotron">
			<p>It seems that you haven't Login. Please Login first.</p>
			<h2>You will be redirected to Login page in 5 seconds</h2>
			<?php header("refresh:5, url=../login"); ?>	
			</div>
		</center>
	<?php }
?>


</body>
</html>

