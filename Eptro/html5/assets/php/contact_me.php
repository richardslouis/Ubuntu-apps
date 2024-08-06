<?php
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
	
// create email body and send it	
$to = 'myemail@mail.com'; //Just write your email, no more :)
$email_subject = "Contact form submitted by:  $name";
$email_body = "You have received a new message. \n\n".
				  " Here are the details:\n \nName: $name \n\nSubject: $subject\n\n ".
				  "Email: $email_address\n\n Message: \n $message";
$headers = "From: My contact form";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>