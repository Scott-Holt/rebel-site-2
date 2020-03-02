<?php

// $firstName = $_POST['first-name'];
// $lastName = $_POST['last-name'];
// $email = $_POST['email'];
// $message = $_POST['message'];
// $subject = "Message from Website";
// $formMessage = "Name: $firstName $lastName \n Message: $message ";
// $recipient = "operations@go2rebel.com";
// $mailheader = "From: $email \r\n";

// mail($recipient, $subject, $formMessage, $mailheader) or die("Error!");

// header('Location: thankyou.html');
// exit();



$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = "Message from Website";
$senderInfo = "Name: $firstName $lastName \n Message: $message";
$recipient = "operations@go2rebel.com, jholt@go2rebel.com";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $senderInfo, $mailheader) or die("Error!");

header('Location: thankyou.html');
exit();




?>