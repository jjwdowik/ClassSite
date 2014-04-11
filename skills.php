<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Jeremy Wdowik</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head>


	<body>
		<header>
			<?php
				include('header.php');
			?>
		</header>

		<section id="skills">
			<h1 class="skills">Skills</h1>
			<div class="circContainer">
				<div class="smCircle"><p class="circText">C++</p></div>
				<div class="smCircle"><p class="circText">Java</p></div>
				<div class="smCircle"><p class="circText">Web Development</p></div>
				<div class="smCircle"><p class="circText">Project Management</p></div>
			</div>
		</section>
		<?php
			include('footer.php');
		?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/jquery.localscroll-1.2.7.js"></script>
	<script src="js/jquery.scrollTo-1.4.3.1.js"></script>		
	<script src="js/main.js"></script>

	</body>

</html>