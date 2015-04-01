<?php include '../config/config.php'; ?>
<?php $admin = $_SESSION['admin']; ?>
<!doctype html>
<html lang="en">
	<head>
		<title>
				Admin Portal
		</title>

		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src = "../js/bootstrap.js"></script>

	</head>

	<body>
	<br>
		<div class="container jumbotron">
			<div class="container">
			<form action="" method="post">
				<button type="submit" class="btn btn-primary" style="float:right;" name="logout">Logout</button>
			</form>
				<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#all_orders" aria-controls="all_orders" role="tab" data-toggle="tab">All Orders</a></li>
    <li role="presentation"><a href="#pending_orders" aria-controls="pending_orders" role="tab" data-toggle="tab">Pending Orders</a></li>
    <li role="presentation"><a href="#update_wallet" aria-controls="update_wallet" role="tab" data-toggle="tab">Update Wallet</a></li>
    <li role="presentation"><a href="#orders_by_date" aria-controls="orders_by_date" role="tab" data-toggle="tab">See Orders by Date</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="all_orders">
  	<?php 
			if (isset($_SESSION['admin'])) { ?>
				<div class="container">
			<h2><center><u>All Printing Orders</u></center></h2>
		</div>
		<?php 
			$select = "SELECT * FROM `print_orders` ORDER BY id ASC";
			$result = mysql_query($select); 
			
			?>
				<div class="responsive container">
				<table class="table table-hover">
				<tr style="background-color:#e3e3e3">
					<th>Order ID</th>
					<th>Name</th>
					<th>File Name</th>
					<th>No. of Pages</th>
					<th>Delivery Location</th>
					<th>Cost</th>
					<th>Payment</th>
					<th>Status</th>
				</tr>

			<?php while ($res = mysql_fetch_assoc($result)) { ?>
				<tr>	
					<td><?php echo $res['id']; ?></td>
					<td><a href="../print_uploads/<?php echo $res['file_name']; ?>"><?php echo $res['file_name']; ?></a></td>
					<td><?php echo $res['name']; ?></td>
					<td><?php echo $res['pages']; ?></td>
					<td><?php echo $res['take_away']; ?></td>
					<td><?php echo $res['cost']; ?></td>
					<td><?php echo $res['money_status']; ?></td>
					<td><a href="update.php?id=<?php echo $res['id'] ?>"><?php echo $res['status']; ?></a></td>
				</tr>
		<?php	}
		?>

				</table>
				</div>
			<?php }else{ ?>
				<div class="container jumbotron">
					<center><p>Please <a href="index.php">Login</a> to Upadte the details</p></center>
				</div>
			<?php }
		 ?>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="pending_orders">
		<?php 
			if (isset($_SESSION['admin'])) { ?>
				<div class="container">
			<h2><center><u>Pending Printing Orders</u></center></h2>
		</div>
		<?php 
			$select = "SELECT * FROM `print_orders` WHERE status = 'pending' ORDER BY id ASC";
			$result = mysql_query($select); 
			
			?>
				<div class="responsive container">
				<table class="table table-hover">
				<tr style="background-color:#e3e3e3">
					<th>Order ID</th>
					<th>File Name</th>
					<th>Name</th>
					<th>No. of Pages</th>
					<th>Delivery Location</th>
					<th>Cost</th>
					<th>Payment</th>
					<th>Status</th>
				</tr>

			<?php while ($res = mysql_fetch_assoc($result)) { ?>
				<tr>	
					<td><?php echo $res['id']; ?></td>
					<td><a href="../print_uploads/<?php echo $res['file_name']; ?>"><?php echo $res['file_name']; ?></a></td>
					<td><?php echo $res['name']; ?></td>
					<td><?php echo $res['pages']; ?></td>
					<td><?php echo $res['take_away']; ?></td>
					<td><?php echo $res['cost']; ?></td>
					<td><?php echo $res['money_status']; ?></td>
					<td><a href="update.php?id=<?php echo $res['id'] ?>"><?php echo $res['status']; ?></a></td>
				</tr>
		<?php	}
		?>

				</table>
				</div>
			<?php }else{ ?>
				<div class="container jumbotron">
					<center><p>Please <a href="index.php">Login</a> to Upadte the details</p></center>
				</div>
			<?php }
		 ?>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="update_wallet">
  	<?php 
			if (isset($_SESSION['admin'])) { ?>
				<form action="" method="post">
					<div class="container">
						<div class="col-md-3"></div>
						<div class="col-md-6"><br>
							<input type="text" name="email" id="input" class="form-control" placeholder="Email" required="required"><br>
							<input type="text" name="amount" id="input" class="form-control" placeholder="Amount" required="required"><br>
							<!-- <input type="date" name="date" id="inputDate" class="form-control" required="required"> -->
							<button type="submit" class="btn btn-primary" name="update">Update Wallet</button>
						</div>
						<div class="col-md-3"></div>
					</div>
				</form>
			<?php }else{ ?>
				<div class="container jumbotron">
					<center><p>Please <a href="index.php">Login</a> to Upadte the details</p></center>
				</div>
			<?php }
		 ?>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="orders_by_date">
		<?php 
			if (isset($_SESSION['admin'])) { ?>
				
			<?php }else{ ?>
				<div class="container jumbotron">
					<center><p>Please <a href="index.php">Login</a> to Upadte the details</p></center>
				</div>
			<?php }
		?>
  </div>
</div>

</div>
			</div>
		</div>
	</body>
</html>


<?php 
	if (isset($_POST['update'])) {
		$email = $_POST['email'];
		$amount = $_POST['amount'];

		$select = "SELECT * FROM `users` WHERE email = '$email'";
		$result = mysql_query($select);
		$res = mysql_fetch_assoc($result);
		$email_db = $res['email'];

		if ($email == $email_db) {
			$wallet_balance = $res['wallet'];
			$new_balance = $amount + $wallet_balance;
			mysql_query("INSERT INTO `wallet_update`(`id`, `admin_name`, `user_email`, `amount`) VALUES ('','$admin','$email','$amount')");
			mysql_query("UPDATE `users` SET `wallet`='$new_balance' WHERE email = '$email'");
			echo "<script>alert('Wallet for $email has be updated successfully with $amount');</script>";	
		}
		else{
			echo "<script>alert('There is no user with email id $email. Please Check the mail.');</script>";
		}
	}
?>


<?php 
    if (isset($_POST['logout'])) {
      session_unset($_SESSION['admin']);
      // session_unset($_SESSION['name']);
      header("location:index.php");
    }
 ?>
