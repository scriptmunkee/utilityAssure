<?php $name = $_POST['uname'];
$email = $_POST['uemail'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "info@utilityassure.co.uk";
$subject = "Web Enquiry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: index.php#contact');
?>


