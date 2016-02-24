<?php
//Blank message to start with so we can append to it
$message = '';
//ensure that Full Name, Email, Subject and Password are set.
if(empty($_POST['name'])){
	die('Ensure that your full name is provided');
	}

if(empty($_POST['email'])){
		die('Ensure that your email is provided.');
	}
if(empty($_POST['subject'])){
	die('Ensure that the subject is set');
	}
if(empty($_POST['message'])){
	die('Ensure that your message is set');

	}
//Construct the message
$message .=<<<TEXT
		 {$_POST['message']}
TEXT;

//Email sent to
$to = 'info@tusmotravel.com';
//Email Subject
$subject = $_POST['subject'];
//Name to show email from
$from = $_POST['name'];
//Domain to show email from
$fromEmail = $_POST['email'];

//Construct a header to send who the email is from
$header = 'From: '.$from .'<' .$fromEmail . '>'	;

//Try sending your email
if(!mail($to,$subject,$message,$header)){
	die('Error sending email');
	}else {
		die('email sent');
		}

?>
