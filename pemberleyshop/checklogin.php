<?php
include("dbconnect.php");

$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from users where username='$username' and password='$password'";

$result=mysql_query($sql);

// mysql num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1) {
	echo "Welcome ", $username;
}

// header("location:login_success.php");
else {
	echo "Wrong username or Password";
}

?>