<?php
session_start();
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email=$_POST['email'];
	$pick=$_POST['pick'];
	$drops=$_POST['drops'];
	$Date=$_POST['Date'];
	$hour=$_POST['hour'];
	$min=$_POST['min'];
	$am=$_POST['am'];
	$vehicle=$_POST['vehicle'];
	$conn = new mysqli('localhost','root','','conn');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		if(isset($_SESSION["loggedin"])){
			$pid=($_SESSION["id"]);
		}
		$stmt = $conn->prepare("insert into stud4(name,phone,email,pick,drops,Date,hour,min,am,vehicle,id) values(?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssssssss", $name,$phone,$email,$pick,$drops,$Date,$hour,$min,$am,$vehicle,$pid);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();

	}
?>