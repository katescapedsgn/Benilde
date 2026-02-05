<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pemberley</title>
<link rel="shortcut icon" href="logo/snitch-icon.png">
	
	<!--- stylesheets --->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/grid.css">
	
	<!--- fonts --->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
	
	<!--- icons --->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	
</head>

<body>
	<!---header--->
	<header>
		<div class="container">
			<div class="title"><a href="index.html" style="color: #fff;">pemberley</a></div>
		</div>
	</header>
	
	<!---main--->
	<main id="login">
		<!---information--->
		<form name="login" method="POST" action="checklogin.php">
			<div class="container">
				
				<section class="col-4 center">
					<h1>log in to view orders</h1>
					<p>Username</p>
					<input name="username" type="text">
					<p>Password</p>
					<input name="password" type="password">
					
					<div class="col-12 center">
						<input name="submit" type="submit" value="Log In">
					</div>
				</section>
				
			</div>
		</form>
	</main>
	
	<!---footer--->
	<footer class="col-12"><p>For educational purposes only</p></footer>
	
</body>
</html>