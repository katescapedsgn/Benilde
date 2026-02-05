<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Guest</title>
</head>

<body>
	<?php
	include 'dbconnect.php';
	
	//Prepare data to be submitted
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$guest = $_POST['guest'];
	$message = $_POST['message'];
	
	//add data to database
	if (isset($_POST['email'])) {
		$sql = "INSERT INTO weddinglist(ID, FIRSTNAME, LASTNAME, EMAIL, GUEST, MESSAGE) VALUES (default, '$fname', '$lname', '$email', '$guest', '$message')";
	}
	
	if ($conn->query($sql) === true) {
		echo '<br>New record added successfully';
	} else {
		echo 'Error: ' . $sql . '<br>' . $conn->error;
	}
	
	//close connection
	$conn->close();
	
	//redirect to guestlist
	header('Location:guestlist.php')
	?>
</body>
</html>