<?php
session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Form</title>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="bootstrap.min.css"/>
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="style1.css"/>
	<script defer src="script.js"></script>
</head>
<body>
<?php
$connection= new mysqli('localhost','root','','conn');
if(isset($_SESSION["loggedin"])){
    $id=($_SESSION["id"]);
}
$result = mysqli_query($connection,"select * from stud4 where id=$id");
while ($row = mysqli_fetch_array($result)) {
	?>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Your Bookings</h1>
						</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<p class="form-control" type="text" name="name" id="name" placeholder=""><?php echo $row['name']; ?></p>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<p class="form-control" placeholder=""><?php echo $row['email']; ?></p>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<p class="form-control"placeholder=""><?php echo $row['phone']; ?></p>
							</div>
							<div class="form-group">
								<span class="form-label">Pickup Location</span>
							<p class="form-control"placeholder=""><?php echo $row['pick']; ?></p>
							</div>
							<div class="form-group">
								<span class="form-label">Destination</span>
								 <p class="form-control" placeholder=""><?php echo $row['drops']; ?></p>
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Pickup Date</span>
										<p class="form-control" placeholder=""><?php echo $row['Date']; ?></p>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Hour</span>
												<p class="form-control" placeholder=""><?php echo $row['hour']; ?></p>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Min</span>
												<p class="form-control" placeholder=""><?php echo $row['min']; ?></p>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">AM/PM</span>
												<p class="form-control" placeholder=""><?php echo $row['am']; ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Vehicle type</span>
								<p class="form-control" placeholder=""><?php echo $row['vehicle']; ?></p>
							</div>
							
							<p style="text-align: center;"><a href="formq.php" class="btn btn-success">Continue to Home Page</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
</body>

</html>