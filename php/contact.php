<?php
    // variables start
	$name = "";
	$email = "";
	$message = "";
	 
	$name =  trim(isset($_POST['contactNameField'])?$_POST['contactNameField']:'');
	$email =  trim(isset($_POST['contactEmailField'])?$_POST['contactEmailField']:'');
	$message =  trim(isset($_POST['contactMessageTextarea'])?$_POST['contactMessageTextarea']:'');
	// variables end
	
	// email address starts
	$emailAddress = 'tanvir.dpmiracle@gmail.com';
	// email address ends
	
	$subject = "Message From: $name";	
	$message = "<strong>From:</strong> $name <br/><br/> <strong>Message:</strong> $message";
	
	$headers = 'From: '. $name . '<' . $email . '>' . "\r\n";
	$headers .= 'Reply-To: ' . $email . "\r\n";
	
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	//send email function starts
	mail($emailAddress, $subject, $message, $headers);
	//send email function ends
?>