<!DOCTYPE html>
<html>
	<head>
		<title>Jeremy Wdowik</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<link rel="stylesheet" href="css/normalize.css" type="text/css">
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head>


	<body>
		<header>
			<?php
				include('header.php');
			?>
		</header>



		<section id="home">
			<div class="space"></div>
			<div class="center"><img src="http://localhost/ClassSite/img/wdowik.jpg" alt="Jeremy" class="circular"></div>
			<h1 class="name">Jeremy Wdowik</h1>
		</section>

		<section id="skills" data-stellar-background-ratio="0.5">
			<h1 class="skills">Skills</h1>
			<div class="circContainer">
				<div class="myButton">C++</div>
				<div class="myButton">Java</div>
				<div class="myButton">HTML5</div>
				<div id="divBreak"></div>
				<div class="myButton">CSS3</div>
				<div class="myButton">Python</div>
				<div class="myButton">Javascript</div>

			</div>
		</section>

		<section id="projects">
			<h1 class="pro">Projects</h1>
			<h2 class="pro">Hover for details!</h2>
			<div class="projContainer">

                <div class="view view-nice">
                    <img src="http://localhost/ClassSite/img/flag.png" />
                    <div class="mask">
                        <h2>Capture the Flag<br /> Java Game!<br /><br /></h2>
                        <a href="http://localhost/ClassSite/img/CaptureTheFlag.jar" class="info">Download!</a>
                    </div>
                </div>

                <div class="view view-nice">
                    <img src="http://localhost/ClassSite/img/sand.jpg" />
                    <div class="mask">
                        <h2>SandCastle Beach Resort<br /> Website!<br /><br /></h2>
                        <a href="http://www.sandcastlebeachresort.com" target="_blank" class="info">View the Site!</a>
                    </div>
                </div>

                <div id="divBreak"></div>

                <div class="view view-nice">
                    <img src="http://localhost/ClassSite/img/ktp.jpg" />
                    <div class="mask">
                        <h2 class="white">Kappa Theta Pi<br /> Website!<br /><br /></h2>
                        <a href="http://www.kappathetapi.com" target="_blank" class="info">View the Site!</a>
                    </div>
                </div>

                <div class="view view-nice">
                    <img src="http://localhost/ClassSite/img/jollygoat.png" />
                    <div class="mask">
                        <h2>Web Dev and Consulting!<br /><br /></h2>
                        <a href="http://jollygoat.com" target="_blank" class="info">View the Site!</a>
                    </div>
                </div>                



			</div>

		</section>

		<section id="experiences" data-stellar-background-ratio="0.5">
			<h1 class="exp">Experience</h1>
			<div class="theExp">
				<h1>MPrint - University of Michigan</h1>
				<h2>MPrint Student Temp 2013 - Current</h2>
				<div id="divBreak"></div>
				<h1>ADP (Auto Data Processing)</h1>
				<h2>Hosting Operations Intern Summer 2013</h2>
				<div id="divBreak"></div>
				<h1>The Boeing Company</h1>
				<h2>Java Development Intern Summer 2014</h2>
				<div id="divBreak"></div>
				<div id="divBreak"></div>
				<a href="http://localhost/ClassSite/img/resume.pdf" target="_blank"><div class="resume">View My Resume</div></a>
			</div>
		</section>		
		
		<section id="contact">
			<h1 class="con">Contact</h1>
		</section>	


		<?php
			include('footer.php');
		?>


	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.localscroll-1.2.7.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo-1.4.3.1.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>		
	<script type="text/javascript" src="js/main.js"></script>

	</body>

</html>