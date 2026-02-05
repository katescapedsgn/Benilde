<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>A.Z. Fell and Co.</title>

<!--- STYLESHEETS --->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/grid.css">

<!--- FONTS --->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

</head>

<body>
	<!--- VIDEO BG 
	<video id="video-bg" muted autoplay loop poster="videos/az fell bw.jpg">
		<!---
		<source src="videos/good omens.mp4" type="video/mp4">
		<source src="videos/good omens.webm" type="video/webm">
		<source src="videos/good omens.ogg" type="video/ogg">
	</video>
	--->
	
	<div id="featured" class="col-12"></div>
	
	<!--- MAIN --->
	<main id="content">
		<div id="title">
			<h3 class="welcome">Welcome to</h3>
			<h1>A.Z. Fell and Co.</h1>
			<h3 class="desc">Fill out the form to add it to the database!</h3>
		</div>
		
		<!--- AUTHOR --->
		<section id="author" class="col-4 left">
			<form name="author" method="POST" action="authors.php">
				<div class="formcont">
					<div class="col-12">
						<h2>author</h2>
					</div>
					<p>First Name: <input name="firstname" type="text"></p>
					<p>Last Name: <input name="lastname" type="text"></p>
					<input name="submit" type="submit" value="Add">
				</div>
			</form>
		</section>
		
		<!--- TYPES --->
		<section id="types" class="col-4 left">
			<form name="types" method="POST" action="types.php">
				<div class="formcont">
					<div class="col-12">
						<h2>types</h2>
					</div>
					<p>Type: <input name="typename" type="text"></p>
					<input name="submit" type="submit" value="Add">
				</div>
			</form>
		</section>
		
		<!--- BOOKS --->
		<section id="books" class="col-4 left">
			<form name="books" method="POST" action="books.php">
				<div class="formcont">
					<div class="col-12">
						<h2>books</h2>
					</div>
					<p>Book Title: <input name="booktitle" type="text"></p>
					<p>Author: 
						<select name="authors" id="">
							<?php
								//include("dbconnect.php");
								//$query = "SELECT * FROM 'books'";
								//$result = mysql_query($query);
								
								//while($row=mysql_fetch_array($result))
								//echo '<option value="' . $row[id] . '">' . $row[firstname] //$row[lastname]"</option>";
								//
							?>
							<option value="1">Sally Meyers</option>
							<option value="2">George Smith</option>
							<option value="3">Peter Gabriel</option>
							<option value="4">Dale Mercer</option>
						</select>
					</p>
					
					<p>Types:
						<select name="types" id="">
							<option value="1">History</option>
							<option value="2">Suspense</option>
							<option value="3">Science Fiction</option>
						</select>
					</p>
					<input name="submit" type="submit" value="Add">
				</div>
			</form>
		</section>
	</main>
</body>
</html>
