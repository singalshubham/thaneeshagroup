<?php

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '/home/thanqvlj/public_html/src/Exception.php';
require '/home/thanqvlj/public_html/src/PHPMailer.php';
require '/home/thanqvlj/public_html/src/SMTP.php';

//Create a new PHPMailer instance and use SMTP
$mail = new PHPMailer;
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'server310.web-hosting.com';
//Set the SMTP port number - 465 (SSL)
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username and password to use for SMTP authentication
$mail->Username = 'info@thaneeshagroup.com';
$mail->Password = 'Yash@1234';
//Set who the message is to be sent from
$mail->setFrom('info@thaneeshagroup.com', 'NC TEST MESSAGE FROM');
//Set who the message is to be sent to
$mail->addAddress('info@toponsearch.com', 'NC TEST MESSAGE TO');
//Set the subject line
$mail->Subject = 'SMTP authentication test';
//Set the body of a test email
$mail->IsHTML(true);
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];

$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
