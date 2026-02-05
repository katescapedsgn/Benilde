<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Database Connect</title>
</head>

<body>
	<?php
	$servername = 'localhost';
	$username = 'kateafable';  //kateafable
	$password = 'skycastle179';  //skycastle179
	$dbname = 'dma1_tacastacas';
	
	//create connection
	$conn = new MySQLi($servername, $username, $password, $dbname);
	
	?>
</body>
</html>