<?php
include("dbconnect.php");

$booktitle=$_POST['booktitle'];
$authors=$_POST['authors'];
$types=$_POST['types'];

//INSERT INTO `books` (`id`, `title`, `author`, `type_id`) VALUES (1, ‘A Long Day in Spring’, 3, 1), (2, ‘Fifteen Hours in March’, 2, 2), (3, ‘Green Trees Go Wild’, 1, 3), (4, ‘And Then It Happened’, 1, 1), (5, ‘Missing in Action’, 5, 2), (6, ‘Fourteen Days in February’, 2, 2), (7, ‘Sixteen Seconds in March’, 2, 2);

$sql="insert into books (title, author, type_id) values ('$booktitle', '$authors', '$types')";

$type_result=mysql_query($sql);

header('location:index.html');