<?php

	$host="localhost"; //host
	$username="kateafable"; //username
	$password="uV0L3vgjRHEb"; //password
	$db_name="kateafable_azfellandco"; //database name

$variable=mysql_connect($host,$username,$password) or die ("cannot connect to database");

$variable2=mysql_select_db($db_name) or die ("alert message here");

?>