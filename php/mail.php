<?php

//FORM INPUT VARS
if(!empty($_POST["send"])) {
$name = $_POST['fname'];
$email = $_POST['email'];
$company = $_POST['company'];
$message = $_POST['message'];

//BUILDING MAIL
$recipient = "zamora@shugert.com.mx";
$subject = "Message from < " . $name . " >. Sent from contact form";
$mailheader = "From: " . $name . "<". $email .">\r\n";
$formcontent = "From: " . $name . "\n Company: " . $company . "\n Message: " . $message;

if(mail($recipient, $subject, $formcontent, $mailheader)){
  $message_success = "Your contact information is received successfully.";
	$type = "success";
}

echo "Email sent, we will contact you shortly.";
}
?>