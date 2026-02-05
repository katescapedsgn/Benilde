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
	<main>
		<!---order--->
		<form name="order" method="POST" action="order.php">
			<div class="container">
				
				<section class="col-12 left">
					<h1>Choose your book</h1>
					
					<div class="col-2 left">
						<input type="radio" name="orderid" value="1" checked id="1" class="input-hidden">
						<label for="1">
							<div class="media">
								<img src="images/good omens.jpg" alt="">
								<div class="mediatxt">
									<h2>Good Omens</h2>
									<h3>Neil Gaiman & Terry Pratchett</h3>
									<p>PHP 600</p>
								</div>
							</div>
						</label>
					</div>
					
					<div class="col-2 left">
						<input type="radio" name="orderid" value="2" id="2" class="input-hidden">
						<label for="2">
							<div class="media">
								<img src="images/2night circus.jpg" alt="">
								<div class="mediatxt">
									<h2>Night Circus</h2>
									<h3>Erin Morgenstern</h3>
									<p>PHP 400</p>
								</div>
							</div>
						</label>
					</div>
					
					<div class="col-2 left">
						<input type="radio" name="orderid" value="3" id="3" class="input-hidden">
						<label for="3">
							<div class="media">
								<img src="images/3caraval.jpg" alt="">
								<div class="mediatxt">
									<h2>Caraval</h2>
									<h3>Stephanie Garber</h3>
									<p>PHP 500</p>
								</div>
							</div>
						</label>
					</div>
					
					<div class="col-2 left">
						<input type="radio" name="orderid" value="4" id="4" class="input-hidden">
						<label for="4">
							<div class="media">
								<img src="images/4grisha trilogy.jpg" alt="">
								<div class="mediatxt">
									<h2>Shadow and Bone</h2>
									<h3>Leigh Bardugo</h3>
									<p>PHP 600</p>
								</div>
							</div>
						</label>
					</div>
					
					<div class="col-2 left">
						<input type="radio" name="orderid" value="5" id="5" class="input-hidden">
						<label for="5">
							<div class="media">
								<img src="images/5adsom.jpg" alt="">
								<div class="mediatxt">
									<h2>A Darker Shade of Magic</h2>
									<h3>V.E. Schwab</h3>
									<p>PHP 400</p>
								</div>
							</div>
						</label>
					</div>
					
					<div class="col-2 left">
						<input type="radio" name="orderid" value="6" id="6" class="input-hidden">
						<label for="6">
							<div class="media">
								<img src="images/6sufficiently advanced magic.jpg" alt="">
								<div class="mediatxt">
									<h2>Sufficiently Advanced Magic</h2>
									<h3>Andrew Rowe</h3>
									<p>PHP 400</p>
								</div>
							</div>
						</label>
					</div>
					
				</section>
				
				<section class="col-12 center">
					<input name="submit" type="submit" value="Place Order">
				</section>
				
			</div>
		</form>
	</main>
	
	<!---footer--->
	<footer class="col-12"><p>For educational purposes only</p></footer>
	
</body>
</html>
