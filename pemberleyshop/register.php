<?php
include("dbconnect.php");

$username=$_POST['username'];
$password=$_POST['password'];
$customername=$_POST['customername'];
$customeremail=$_POST['customeremail'];

// INSERT INTO `users` (`id`, `username`, `password`, `customername`, `customeremail`) VALUES (NULL, 'eirasmith', 'skyecastle', 'Eira Smith', 'eira.smith@gmail.com');
$sql="insert into users (username, password, customername, customeremail) values ('$username', '$password', '$customername', '$customeremail')";

$result1=mysql_query($sql);

header('location:index.php');