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
		<!---sales table--->
		<form name="sales" method="post" action="sales.php">
			<div class="container">
				<h1>
					<table>
						<tr class="tableheading">
							<th>Date Ordered</th>
							<th>Number</th>
							<th>Customer Name</th>
							<th>Book Name</th>
							<th>Book Author</th>
							<th>Price</th>
						</tr>
						
						<!---dbconnect class.php--->
						
						<!---TEMPLATE

						<tr><p>
							<td>08-10-2019</td>
							<td>1</td>
							<td>Julia Sia</td>
							<td>Honey Lemonade</td>
							<td> PHP 120</td>
						</p></tr>
						
						<tr><p>
							<td></td>
							<td></td>
							<td></td>
							<td style='text-align:right; font-weight:900; border-top: 1px solid #21409A; border-bottom: 1px solid #21409A;'>TOTAL</td>
							<td style='font-weight:900; border-top: 1px solid #21409A; border-bottom: 1px solid #21409A;'> PHP 1660</td>
						</p></tr>
						--->
						<?php
						echo '<tr>';
						echo '<p>';
						echo '<td></td>';
						echo '</p>';
						echo '</tr>';
						?>
					</table>
				</h1>
			</div>
		</form>
	</main>
	
	<!---footer--->
	<footer class="col-12"><p>For educational purposes only</p></footer>
	
</body>
</html>