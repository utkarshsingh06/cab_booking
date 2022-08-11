<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email=$_POST['email'];
	// Database connection
	$conn = new mysqli('localhost','root','','pest1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into data1(name,phone) values(?, ?)");
		$stmt->bind_param("ss", $name,$phone);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>