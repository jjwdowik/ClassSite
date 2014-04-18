<?php
	$filename = "jjForm.csv";
	$handle = fopen($filename, 'a');
	//a means open file append, if doesn't exist create it and append it
	$msg = "That person's name is ";
	$fileInfo = "";
	foreach($_POST as $name => $value){
		print "$name : $value<br/>";
		$msg .="$name : $value\n";
		$fileInfo .="$value,";
	}
	$fileInfo.="\n";

	//send email
	$to = "jjwdowik@umich.edu";
	// $headers = "From: ". $_POST["name"] ."<".$_POST["email"]. "<".$_POST["phone"]."<".$_POST["year"]."<".$_POST["major"]."<".$_POST["category"]."<".$_POST["message"]."> \r\n";
	$headers = "From: ". $_POST["name"] ."<".$_POST["email"]. ">\r\n";
	mail($to, '[Feedback] JeremyWdowikSite', $msg,$headers);

	//Write to file
	fwrite($handle, $fileInfo);
	//close the file
	fclose($handle);
?>

