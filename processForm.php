<?php
	$filename = "jjForm.csv";
	$handle = fopen($filename, 'a');
	//a means open file append, if doesn't exist create it and append it
	$msg = "Okay lets get it \n\n ";
	$fileInfo = "";
	foreach($_POST as $name => $value){
		print "$name : $value<br/>";
		$msg .="$name : $value\n";
		$fileInfo .="$value,";
	}
	$fileInfo.="\n";

	//send email
	$to = "jeremywdowik@gmail.com";
	// $headers = "From: ". $_POST["name"] ."<".$_POST["email"]. "<".$_POST["phone"]."<".$_POST["year"]."<".$_POST["major"]."<".$_POST["category"]."<".$_POST["message"]."> \r\n";
	$headers = "From: ". $_POST["name"] ."<".$_POST["email"]. ">\r\n";
	mail($to, '[Feedback] JeremyWdowikSite', $msg,$headers);

	//Write to file
	fwrite($handle, $fileInfo);
	//close the file
	fclose($handle);
?>

