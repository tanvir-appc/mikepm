<?php
    // variables start
	$name = "";
	$email = ""; 
	$phone = "";
	$address = "";
	$city = "";
	$state = "";
	$zip = "";
	$country = "";
	$service = "";
	$urgent = "";
	$date = "";
	$desc = "";
	$agreement = "";
	$name =  trim(
		isset($_POST['bookingFirstName'])?$_POST['bookingFirstName']:'')
		.' '.
		trim(isset($_POST['bookingLastName'])?$_POST['bookingLastName']:'');
	$email =  trim(isset($_POST['bookingEmail'])?$_POST['bookingEmail']:'');
	$phone =  trim(isset($_POST['bookingPhone'])?$_POST['bookingPhone']:'');
	$address =  trim(isset($_POST['bookingAddress'])?$_POST['bookingAddress']:'');
	$city =  trim(isset($_POST['bookingCity'])?$_POST['bookingCity']:'');
	$state =  trim(isset($_POST['bookingState'])?$_POST['bookingState']:'');
	$zip =  trim(isset($_POST['bookingZip'])?$_POST['bookingZip']:'');
	$country =  trim(isset($_POST['bookingCountry'])?$_POST['bookingCountry']:'');
	$service =  trim(isset($_POST['bookingService'])?$_POST['bookingService']:'');
	$urgent =  trim(isset($_POST['bookingUrgent'])?$_POST['bookingUrgent']:'');
	$date =  trim(isset($_POST['bookingDate'])?$_POST['bookingDate']:'');
	$desc =  trim(isset($_POST['bookingDesc'])?$_POST['bookingDesc']:'');
	// variables end
	
	// email address starts
	$emailAddress = 'tanvir.dpmiracle@gmail.com';
	// email address ends
	
	$subject = "Booking Request From: $name";	
	$message = "<strong>Sender Information:</strong> <br/><br/> ".
				"<strong>Name:</strong> $name <br/> ".
				"<strong>Email:</strong> $email <br/> ".
				"<strong>Phone:</strong> $phone <br/> ".
				"<strong>Address:</strong> $address, $city, $state, $zip, $country <br/> ".
				"<strong>Service:</strong> $service <br/> ".
				"<strong>How urgent is this inquiry?:</strong> $urgent <br/> ".
				"<strong>Date of Embarkation:</strong> $date <br/> ".
				"<strong>Describe your perfect charter:</strong> $desc";
	
	$headers = 'From: '. $name . '<' . $email . '>' . "\r\n";
	$headers .= 'Reply-To: ' . $email . "\r\n";
	
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	//send email function starts
	mail($emailAddress, $subject, $message, $headers);
	//send email function ends
?>