<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$lname = $_POST['lname'];
	$mailFrom = $_POST['mail'];
	$pnumber = $_POST['pnumber'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


	$mailTo = "albert.cole60@yahoo.com";
	$headers = "From: " .$mailFrom;
	$txt = "You have recieved an e-mail from ".$name.".\n\n".$message;


	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}

?>