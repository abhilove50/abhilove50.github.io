<?php

$name = $_POST['name'];
$email = $_POST['email'];
$email = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "akkumarabhi2.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error Please check values!");
echo "Thank You!";
?>
