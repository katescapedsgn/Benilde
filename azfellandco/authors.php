<?php
include("dbconnect.php");

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];

//INSERT INTO `authors` (`id`, `first_name`, `last_name`) VALUES (1, ‘Sally’, ‘Meyers’), (2, ‘George’, ‘Smith’),(3, ‘Peter’, ‘Gabriel’), (4, ‘Dale’, ‘Mercer’);

$sql="insert into authors (first_name, last_name) values ('$firstname', '$lastname')";

$author_result=mysql_query($sql);

header('location:index.html');