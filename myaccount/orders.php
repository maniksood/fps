<?php include '../config/config.php'; ?>
<?php $wallet = $_SESSION['wallet']; ?>
<?php $id = $_SESSION['id']; ?>
<?php $email = $_SESSION['email']; ?>
<?php $name = $_SESSION['name']; ?>
<!doctype html>
<html lang="en">
	<head>
		<title>
				Orders | <?php echo $name; ?>
		</title>

		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css ">
		
			 <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
			 <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

	</head>

	<body>

			<?php include '../header/header.php'; ?>
	
		<div class="container">
			<h2><center><u>Printing Orders</u></center></h2>
		</div>
		<?php 
			$select = "SELECT * FROM `print_orders` WHERE email = '$email' ORDER BY id DESC";
			$result = mysql_query($select); 
			
			?>
				<div class="responsive container">
				<table class="table table-hover">
				<tr style="background-color:#e3e3e3">
					<th>Order ID</th>
					<th>File Name</th>
					<th>No. of Pages</th>
					<th>Cost</th>
					<th>Payment</th>
					<th>Status</th>
				</tr>

			<?php while ($res = mysql_fetch_assoc($result)) { ?>
				<tr>	
					<td><?php echo $res['id']; ?></td>
					<td><?php echo $res['file_name']; ?></td>
					<td><?php echo $res['pages']; ?></td>
					<td><?php echo $res['cost']; ?></td>
					<td><?php echo $res['money_status']; ?></td>
					<td><?php echo $res['status']; ?></td>
				</tr>
		<?php	}
		?>

				</table>
				</div>
	</body>
</html>