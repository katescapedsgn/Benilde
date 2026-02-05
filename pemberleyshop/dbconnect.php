<?php

	$host="localhost"; //host
	$username="katetaca_kate"; //username
	$password="pemberley010719"; //password
	$db_name="katetaca_pemberleyshop"; //database name

$variable=mysql_connect($host, $username, $password) or die ("cannot connect to database");

$variable2=mysql_select_db($db_name) or die ("alert message here");

?>