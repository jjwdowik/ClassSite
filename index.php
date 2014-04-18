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



		<section id="home" class="slide" data-slide="1">
			<div class="space"></div>
			<div class="center"><img src="http://www.jeremywdowik.com/img/wdowik.jpg" alt="Jeremy" class="circular"></div>
			<h1 class="name">Jeremy Wdowik</h1>
		</section>

		<section id="skills" class="slide" data-slide="2" data-stellar-background-ratio="0.5">
			<h1 class="skills">Skills</h1>
			<div class="circContainer">
				<div class="myButton">C++</div>
				<div class="myButton">Java</div>
				<div class="myButton">HTML5</div>
				<div id="divBreak"></div>
				<div class="myButton">CSS3</div>
				<div class="myButton">Python</div>
				<div class="myButton">JavaScript</div>

			</div>
		</section>

		<section id="projects" class="slide" data-slide="3">
			<h1 class="pro">Projects</h1>
			<h2 class="pro">Hover for details!</h2>
			<div class="projContainer">

                <div class="view view-nice">
                    <img src="http://www.jeremywdowik.com/img/flag.png" />
                    <div class="mask">
                        <h2>Capture the Flag<br /> Java Game!<br /><br /></h2>
                        <a href="http://www.jeremywdowik.com/img/CaptureTheFlag.jar" class="info">Download!</a>
                    </div>
                </div>

                <div class="view view-nice">
                    <img src="http://www.jeremywdowik.com/img/sand.jpg" />
                    <div class="mask">
                        <h2>SandCastle Beach Resort<br /> Website!<br /><br /></h2>
                        <a href="http://www.sandcastlebeachresort.com" target="_blank" class="info">View the Site!</a>
                    </div>
                </div>

                <div id="divBreak"></div>

                <div class="view view-nice">
                    <img src="http://www.jeremywdowik.com/img/ktp.jpg" />
                    <div class="mask">
                        <h2 class="white">Kappa Theta Pi<br /> Website!<br /><br /></h2>
                        <a href="http://www.kappathetapi.com" target="_blank" class="info">View the Site!</a>
                    </div>
                </div>

                <div class="view view-nice">
                    <img src="http://www.jeremywdowik.com/img/jollygoat.png" />
                    <div class="mask">
                        <h2>Web Dev and Consulting!<br /><br /></h2>
                        <a href="http://jollygoat.com" target="_blank" class="info">View the Site!</a>
                    </div>
                </div>                



			</div>

		</section>

		<section id="experiences" class="slide" data-slide="4" data-stellar-background-ratio="0.5">
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
				<a href="http://www.jeremywdowik.com/img/resume.pdf" target="_blank"><div class="resume">View My Resume</div></a>
			</div>
		</section>		
		
		<section id="contact" class="slide" data-slide="5">
			<h1 class="con">Contact</h1>

			<div id="thankYou">
				<h1>Thank you for the info!!</h1>
				<div id="divBreak"></div>
				<div id="divBreak"></div>
				<div class="center"><img src="http://www.jeremywdowik.com/img/umich.jpg" alt="Jeremy" class="circular"></div>
			</div>

			<div id="contactForm">
				<form id="contactSubmit">
					<fieldset>
						<label for="name">Name</label>
						<input id="name" name="name" type="text" placeholder="First and last name" required>
						<div id="divBreak"></div>	
						<label for="email">Email</label>
						<input id="email" name="email" type="email" placeholder="example@domain.com" required>
						<div id="divBreak"></div>
						<label for="verifyEmail">Verify Email</label>
						<input id="verifyEmail" name="verifyEmail" type="email" placeholder="example@domain.com" required>
						<div id="divBreak"></div>
						<label for="message">message</label>
						<textarea id = "message" name="message" type="text" placeholder = "Please write your message here"></textarea>
						<div id="divBreak"></div>
					</fieldset>


					<input type = "SUBMIT" id = "submit" class="resume" value = "Submit">


				</form>
				<p id="errorForm">Those emails don't match!</p>
			</div>


		</section>	


		<?php
			include('footer.php');
		?>


	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.localscroll-1.2.7.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo-1.4.3.1.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>		
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-45764816-1', 'jeremywdowik.com');
	  ga('send', 'pageview');
	</script>


	</body>

</html>