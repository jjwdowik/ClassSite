<html>	
	<head>
		<link href="css/style.css">
	</head>
	<footer>
		<?php    
 			$filename= basename($_SERVER['REQUEST_URI']);
			if (file_exists($filename)) {
    		$timestamp = date ("F d Y H:i:s.", filemtime($filename));
			}
		?>
		<p class="foot">All Rights Reserved. 2014. Website created by Jeremy Wdowik. Timestamp <?php echo $timestamp?> </p>
	</footer>
</html>