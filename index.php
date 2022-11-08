<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
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
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book a cab</h1>
						</div>
						<form name="form1" action="connect.php" method="post" id="form" onsubmit="return myfunction()">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" name="name" id="name" placeholder="Enter your name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" name="email" id="email" placeholder="Enter your email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" name="phone" id="phone" type="tel" pattern="[6-9]{1}[0-9]{9}" placeholder="Enter your phone number">
							</div>
							<div class="form-group">
								<span class="form-label">Pickup Location</span>
								<!-- <input class="form-control" type="checkbox" id="pick" name="pick" placeholder="Enter ZIP/Location"> -->
								<select  class="form-control" name="pick" id="pick" required>
									<option value="none">None</option>
									<option value="G block">VIT MAIN GATE</option>
									<option value="G block">G block</option>
									<option value="E block">E block</option>
									<option value="L block">L block</option>
									<option value="K block">K block</option>
									<option value="R block">R block</option>
								</select>
							</div>
							<div class="form-group">
								<span class="form-label">Destination</span>
								<!-- <input class="form-control" type="text" id="drops" name="drops" placeholder="Enter ZIP/Location"> -->
								<select  class="form-control" name="drops" id="drops" required>
									<option value="none">None</option>
									<option value="G block">KATPADI RLW STATION</option>
									<option value="E block">CHENNAI</option>
									<option value="L block">PONDICHERYY</option>
									<option value="K block">CHENNAI AIRPORT</option>
									<option value="R block">OTHERS</option>
								</select>
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Pickup Date</span>
										<input class="form-control" type="date" id="Date" name="Date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Hour</span>
												<select class="form-control" id="hour" name="hour">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Min</span>
												<select class="form-control" id="min" name="min">
													<option>05</option>
													<option>10</option>
													<option>15</option>
													<option>20</option>
													<option>25</option>
													<option>30</option>
													<option>35</option>
													<option>40</option>
													<option>45</option>
													<option>50</option>
													<option>55</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">AM/PM</span>
												<select class="form-control" id="am" name="am">
													<option>AM</option>
													<option>PM</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Vehicle type</span>
								<select  class="form-control" name="vehicle" id="vehicle" required>
									<option value="4 WHEELER">4 wheeler</option>
									<option value="6 WHEELER">6 wheeler</option>
									<option value="8 WHEELER">8 wheeler</option>
								</select>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Book Now</button>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>