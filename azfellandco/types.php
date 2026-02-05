<?php
include("dbconnect.php");

$typename=$_POST['typename'];

//INSERT INTO `types` (`type_id`, `type_name`) VALUES (1, ‘History’), (2, ‘Suspense’), (3, ‘Science Fiction’);

$sql="insert into types (type_name) values ('$typename')";

$type_result=mysql_query($sql);

header('location:index.html');