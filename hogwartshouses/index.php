<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hogwarts House</title>

<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>

	
	
<body>
	<div id="navi">
		<a href="index.php?house=1" id="current">Gryffindor</a>
		<a href="index.php?house=2">Hufflepuff</a>
		<a href="index.php?house=3">Ravenclaw</a>
		<a href="index.php?house=4">Slytherin</a>
	</div>
	
	<?php
	$house = $_GET['house'];
	switch ($house){
		case '1':
			$media = 'hogwarts gryffindor.jpg';
			$quote = 'Where dwell the brave at heart, their daring, nerve <br>and chivalry set Gryffindors apart';
			
			$tagline = 'gryffindor';
			$title = 'hogwarts';
			$desc = '<blockquote>scarlet & gold | lion</blockquote><p>Gryffindor is one of the four Houses of Hogwarts School of Witchcraft and Wizardry and was founded by Godric Gryffindor. Gryffindors are known for their nerve, chivalry, daring, courage, bravery and determination. According to J.K. Rowling Gryffindor roughly corresponds to the element of fire.</p>';
			
			$traits = 'Gryffindors are associated with daring, bravery, nerve and chivalry. Gryffindors can be cocky and reckless; they are more prone to saying something or getting into a hairy situation before thinking it through than other Hogwarts houses.';
			$founder = '<b>Godric Gryffindor</b> was the founder of Gryffindor House. His chocolate frog card describes him as the most accomplished dueller of his time and an enlightened fighter against Muggle discrimination.';
			$head = '<b>Minerva McGonagall</b> is the Head of Gryffindor House. She is the <b>Transfiguration</b> teacher at Hogwarts. Minerva is a stern witch, but very righteous.';
			$ghost = 'The Gryffindor House ghost is <b>Nearly Headless Nick</b>. He was beheaded, but the axe was blunt so it took many chops until he was finally dead. He is a friendly ghost who will help any who need it.';
			$room = "<p>The Gryffindor common room and dormitories are located in <b>Gryffindor Tower</b>. Students enter the tower through a painting of the Fat Lady on the Gryffindor landing. They must give her the correct password in order to get her to swing open to reveal the entrance. If someone gives her the wrong password, they are denied entrance.</p><p>Gryffindor's common room has stuffed armchairs and a cozy fire. The arched windows look out over the expansive Quidditch Pitch, Hogwarts Lake, and the Forbidden Forest. Hung above the Fireplace is a picture of Godric Gryffindor.<p>The walls are decorated with pictures of mythical creatures and notable Gryffindor members. Winding mahogany staircases lead to the dormitories. The dormitories have ancient mahogany four-poster beds hung with scarlet curtains with threaded gold.</p>";
			break;
		
		case '2':
			$media = 'hogwarts hufflepuff.jpg';
			$quote = 'You might belong in Hufflepuff,<br>Where they are just and loyal,<br>Those patient Hufflepuffs are true,<br>And unafraid of toil';
			
			$tagline = 'hufflepuff';
			$title = 'hogwarts';
			$desc = '<blockquote>yellow & black | badger</blockquote><p>Hufflepuff is one of the four Houses of Hogwarts School of Witchcraft and Wizardry and was founded by Helga Hufflepuff. Hufflepuffs are known for being trustworthy, loyal and hardworking. According to J.K. Rowling, Hufflepuff roughly corresponds to the element of earth.</p>';
			
			$traits = 'Hufflepuffs are associated with trustworthiness, loyalty and a strong work ethic. Hufflepuff has produced the fewest Dark witches and wizards of any house.';
			$founder = '<b>Helga Hufflepuff</b> was the founder of Hufflepuff House. Her chocolate frog card describes her as a loyal, charming witch with great skill at performing food-related charms.';
			$head = '<b>Pomona Sprout</b> is the Head of Hufflepuff House. She is the Head of <b>Herbology</b> at Hogwarts and brings interesting plants, including ones that dance and talk, to the Hufflepuff common room, possibly the reason why Hufflepuffs are generally good at herbology.';
			$ghost = 'The <b>Fat Friar</b> is the Hufflepuff ghost. He is a plump, friendly man wearing monk robes and is always willing to help Hufflepuffs who are lost or in trouble.';
			$room = "<p>The Hufflepuff common room and dormitories are located in the <b>Hufflepuff Basement</b>. Students enter the Basement through a barrel in a stack of barrels in the kitchen corridor. They must tap the correct barrel in the rhythm of 'Helga Hufflepuff' for the lid to open and reveal the passageway to the common room. If someone taps the wrong barrel or uses the wrong rhythm, that person is drenched in vinegar.</p><p>Hufflepuff's common room is round and cozy, with low ceilings and circular windows showing rippling grass and dandelions. The room always seems sunny, a feeling enhanced by the copper furnishings and the overstuffed yellow and black sofas and chairs. Plants hang from the ceiling or sit on windowsills; many of these are unusual specimens that Professor Sprout brings as decorations.</p><p>Round doors in the common room lead to the dormitories, which are lit by copper lamps. Patchwork quilts cover the four-poster beds and everyone has a copper bed warmer hanging on the wall.</p><p>It is the only common room that has remained free of intruders for over 500 years, or even the course of the books.</p>";
			break;
		
		case '3':
			$media = 'hogwarts ravenclaw.jpg';
			$quote = "Or yet in wise old Ravenclaw,<br>If you've a ready mind,<br>Where those of wit and learning,<br>Will always find their kind";
			
			$tagline = 'ravenclaw';
			$title = 'hogwarts';
			$desc = '<blockquote>blue and bronze | eagle</blockquote><p>Ravenclaw is one of the four Houses of Hogwarts School of Witchcraft and Wizardry. The House was founded by Rowena Ravenclaw. Ravenclaws are known for their wisdom, cleverness, and wit. According to J.K. Rowling, Ravenclaw roughly corresponds to the element of air.</p>';
			
			$traits = '<p>Ravenclaws possess the traits of cleverness, wisdom, wit, intellectual ability and creativity. Many well-known inventors and innovators have come from Ravenclaw.</p><p>Students in Ravenclaw are noted for their individuality and acceptance of people and things that others would consider weird, as well as their outstanding intelligence. They can also be quirky and possess unusual intellectual interests. While others may be inclined to shun and ridicule such people, Ravenclaws generally accept and celebrate these eccentrics. Though they are often called stuck up, that is not the case.</p>';
			$founder = '<b>Rowena Ravenclaw</b> founded Ravenclaw House. She was known as a beautiful and intelligent witch, and her chocolate frog card calls her "the most brilliant witch of her time." Rowena valued learning, so she chose students who demonstrated cleverness and wisdom.';
			$head = '<b>Filius Flitwick</b> is the Head of Ravenclaw House. He is the <b>Charms</b> professor at Hogwarts and the most knowledgeable Charms master alive today. According to the original Pottermore welcome letter, when Ravenclaws are extremely upset he makes little cupcakes do a dance to cheer them up.';
			$ghost = 'The <b>Grey Lady</b> also known as <b>Helena Ravenclaw</b>, is the Ravenclaw ghost. She rarely speaks to anyone outside Ravenclaw, but is a great resource for Ravenclaws who are lost or have lost something.';
			$room = "<p>The Ravenclaw common room and dormitories are located in <b>Ravenclaw Tower</b> on the west side of the castle. Students enter through a door with an bronze eagle-shaped knocker. The knocker asks a question of anyone who knocks on it and opens the door when the question is answered correctly. If the riddle is especially difficult, large groups of students may congregate outside the door as they try to figure it out.</p><p>The common room is circular, with arched windows that provide incredible views of the Hogwarts grounds, and a domed ceiling painted with stars like the night sky. It has a white marble statue of founder Rowena Ravenclaw, and behind it lies the door leading to the dormitories.</p><p>The dormitories are in turrets off the main tower, where students can hear the wind whistling around the windows. The bedsheets on the four-poster beds are made of sky blue silk.</p>";
			break;
		
		case '4':
			$media = 'hogwarts slytherin.jpg';
			$quote = "Or perhaps in Slytherin,<br>You'll make your real friends,<br>Those cunning folk use any means,<br>To achieve their ends";
			
			$tagline = 'slytherin';
			$title = 'hogwarts';
			$desc = '<blockquote>green & silver | serpent</blockquote><p>Slytherin is one of the four houses of Hogwarts School of Witchcraft and Wizardry and was founded by Salazar Slytherin. Slytherins are known for being cunning and ambitious, although it is also known to have produced many Dark witches and wizards. According to J.K. Rowling, Slytherin roughly corresponds to the element of water.</p>';
			
			$traits = '<p>Slytherins are associated with cunning, ambition and a tendency to look after their own.</p><p>Slytherin has produced its share of Dark witches and wizards, but members are not afraid to admit it.</p><p>Slytherins are always striving to be the best, something they have in common with Ravenclaws. However, Slytherins will never leave their own behind.</p>';
			$founder = '<b>Salazar Slytherin</b> was the founder of Slytherin house. His chocolate frog card describes him as one of the first Parselmouths, an accomplished Legilimens and a notorious champion of pure-blood supremacy.';
			$head = "The Head of Slytherin house is <b>Severus Snape</b>. He is the Hogwarts <b>Potions</b> master. Professor Snape's office is in the dungeons.";
			$ghost = "The <b>Bloody Baron</b> is the Slytherin House ghost. He seems mysterious and unfriendly to the other houses, but he is actually very kind to Slytherins and will usually agree to scare people for them if asked nicely. Just don't ask how he got bloodstained, he doesn't like it.";
			$room = "<p>The Slytherin common room and dormitories are located in Slytherin Dungeon. Students enter the Dungeon through a concealed stone wall. They must present the correct password (it changes every fortnight) to open the wall and reveal the entrance to the common room.</p><p>Slytherin's common room looks out into the depths of the Hogwarts lake. The Giant Squid and other interesting aquatic creatures often pass by the windows. It has the feel of a mysterious, underwater shipwreck, but it is still quite cosy.</p><p>The dormitories have ancient four-posters with green and silk hangings and beadspreads embroidered with silver thread. Medieval tapestries depicting the adventures of famous Slytherins hang from the walls. The light comes from silver lanterns hung from the ceilings.</p>";
			break;
		
		default:
			$media = 'hogwarts hufflepuff.jpg';
			$quote = 'You might belong in Hufflepuff,<br>Where they are just and loyal,<br>Those patient Hufflepuffs are true,<br>And unafraid of toil';
			
			$tagline = 'hufflepuff';
			$title = 'my house';
			$desc = '<blockquote>yellow & black | badger</blockquote><p>Hufflepuff is one of the four Houses of Hogwarts School of Witchcraft and Wizardry and was founded by Helga Hufflepuff. Hufflepuffs are known for being trustworthy, loyal and hardworking. According to J.K. Rowling, Hufflepuff roughly corresponds to the element of earth.</p>';
			
			$traits = 'Hufflepuffs are associated with trustworthiness, loyalty and a strong work ethic. Hufflepuff has produced the fewest Dark witches and wizards of any house.';
			$founder = '<b>Helga Hufflepuff</b> was the founder of Hufflepuff House. Her chocolate frog card describes her as a loyal, charming witch with great skill at performing food-related charms.';
			$head = '<b>Pomona Sprout</b> is the Head of Hufflepuff House. She is the Head of <b>Herbology</b> at Hogwarts and brings interesting plants, including ones that dance and talk, to the Hufflepuff common room, possibly the reason why Hufflepuffs are generally good at herbology.';
			$ghost = 'The <b>Fat Friar</b> is the Hufflepuff ghost. He is a plump, friendly man wearing monk robes and is always willing to help Hufflepuffs who are lost or in trouble.';
			$room = "<p>The Hufflepuff common room and dormitories are located in the <b>Hufflepuff Basement</b>. Students enter the Basement through a barrel in a stack of barrels in the kitchen corridor. They must tap the correct barrel in the rhythm of 'Helga Hufflepuff' for the lid to open and reveal the passageway to the common room. If someone taps the wrong barrel or uses the wrong rhythm, that person is drenched in vinegar.</p><p>Hufflepuff's common room is round and cozy, with low ceilings and circular windows showing rippling grass and dandelions. The room always seems sunny, a feeling enhanced by the copper furnishings and the overstuffed yellow and black sofas and chairs. Plants hang from the ceiling or sit on windowsills; many of these are unusual specimens that Professor Sprout brings as decorations.</p><p>Round doors in the common room lead to the dormitories, which are lit by copper lamps. Patchwork quilts cover the four-poster beds and everyone has a copper bed warmer hanging on the wall.</p><p>It is the only common room that has remained free of intruders for over 500 years, or even the course of the books.</p>";
			break;
	}
	
	echo '<main id="content">';
	//LEFT
	echo '<aside id="left">';
	echo '<div id="left-txt">';
	echo '<img id="media" src="' . $media . '">;';
	echo '<div id="quote">' . $quote . '</div>';
	echo '</aside>';
	
	//RIGHT
	echo '<section id="right">';
	echo '<div id="right-txt">';
	//TITLE
	echo '<div id="tagline">' . $tagline . '</div>';
	echo '<div id="title">' . $title . '</div>';
	echo '<div id="line"></div>';
	echo '<div id="short-desc">' . $desc . '</div>';
	//SUBTITLE
	echo '<div class="subtitle">traits</div>';
	echo '<div class="about">' . $traits . '</div>';
	
	echo '<div class="subtitle">founder</div>';
	echo '<div class="about">' . $founder . '</div>';
	
	echo '<div class="subtitle">head</div>';
	echo '<div class="about">' . $head . '</div>';
	
	echo '<div class="subtitle">ghost</div>';
	echo '<div class="about">' . $ghost . '</div>';
	
	echo '<div class="subtitle">common room</div>';
	echo '<div class="about" style="margin-bottom: 100px">' . $room . '</div>';
	
	echo '</div></section>';
	echo '</main>';
	?>
	
</body>
</html>