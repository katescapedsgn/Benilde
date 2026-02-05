<?php
include("dbconnect.php");

$bookname=$_POST['bookname'];
$bookauthor=$_POST['bookauthor'];
$bookprice=$_POST['bookprice'];

// INSERT INTO `orders` (`id`, `bookname`, `bookauthor`, `bookprice`) VALUES (NULL, 'Night Circus', 'Erin Morgenstern', 'PHP 400');
$sql="insert into orders (bookname, bookauthor, bookprice) values ('$bookname', '$bookauthor', '$bookprice')";

$order_result=mysql_query($sql);

header('location:shop.php');