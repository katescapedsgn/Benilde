<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Guest List</title>
<link rel="shortcut icon" href="images/red-engagement-ring.png">

<!--- stylesheets --->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/grid.css">

<!--- fonts --->
<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i|Playfair+Display:400i,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>

<body>
	<div id="links"><a href="http://localhost/dma1_kate/act1%20-%20wedding/">< return to home</a></div>
	
	<div class="guestlist">
		<h1>List of Guests</h1>
		<?php
		include 'dbconnect.php';
		
		//select data from database
		$sql = "SELECT FIRSTNAME, LASTNAME, EMAIL, GUEST, MESSAGE FROM weddinglist";
		$result = $conn->query($sql); //true or false
		
		if ($result->num_rows > 0) {
			//display header
			echo "<table>";
			echo "<tr>";
			echo "<th>FIRST NAME</th>";
			echo "<th>LAST NAME</th>";
			echo "<th>EMAIL</th>";
			echo "<th>GUESTS</th>";
			echo "<th>MESSAGE</th>";
			echo "</tr>";
			
			//loop
			while ($row = $result->fetch_assoc()) {
				//get data from each row
				echo "<tr>";
				echo "<td>$row[FIRSTNAME]</td>";
				echo "<td>$row[LASTNAME]</td>";
				echo "<td>$row[EMAIL]</td>";
				echo "<td>$row[GUEST]</td>";
				echo "<td>$row[MESSAGE]</td>";
				echo "</tr>";
			}
			echo '</table>';
		} else {
			echo 'No records found.';
		}
		
		//close connection
		$conn->close();
		?>
	</div>

</body>
</html>