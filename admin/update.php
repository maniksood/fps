<?php include '../config/config.php'; ?>

<?php $admin = $_SESSION['admin']; ?>
<?php 
	if ($_GET['id']) {
		$id = $_GET['id'];
	}
?>

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
		<div class="container jumbotron">
			<center><h2>Update Status</h2></center><br>
			<form action="" method="post">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<table class="table table-hover">
						<tr>
							<th>ID</th>
							<th>Status</th>
						</tr>
						<tr>
							<td><?php echo $id ?></td>
							<td>
								<form action="" method="post">
									<input type="text" name="status" id="input" class="form-control" required="required" placeholder="Update Status">

								
							</td>
						</tr>
						<tr colspan=''>
							<td><button type="submit" class="btn btn-primary" name="update">Update</button></td>
							</form>
						</tr>
					</table>
				</div>
				<div class="col-md-3"></div>
			</form>
		</div>
	</body>
</html>

<?php if (isset($_POST['update'])) {
	$status = $_POST['status'];
	mysql_query("UPDATE `print_orders` SET `status`='$status' WHERE `id` = $id");
	header("location:orders.php");
} ?>