<?php
// require_once 'mailerClass/class.php';
 require_once $rep . 'php/class/PhpMail/mailerClass/PHPMailerAutoload.php';

 $mail = new PHPMailer;

 //Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "ddfj.pit@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "p@ssword2016";

//Set who the message is to be sent from
$mail->setFrom('donotreply@support.com', 'Holala Store');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress($em, $fn);

//Set the subject line
$mail->Subject = 'Email verification';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

$mail->Body = "this is your verification code <i>" . $mailcode . "</i>";

//Replace the plain text body with one created manually
$mail->AltBody = 'Do not respond to this';
$mail->isHTML(true);
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors

// header("Location: index.php");


?>
