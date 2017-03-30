<?php
require './class.phpmailer.php';
require './class.smtp.php';
require './mail-config.php';

$mail = new PHPMailer();


//$mail->SMTPDebug = 3;                                  // Enable verbose debug output

$mail->isSMTP();                                         // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                 // Enable SMTP authentication
$mail->Username = $config['username'];               // SMTP username - client side (our own)
$mail->Password = $config['password'];                          // SMTP password - client side (owr own)
$mail->SMTPSecure = 'tls';                              // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                       // TCP port to connect to


$mail->setFrom('president@world.com', 'Le President');
$mail->addAddress('regazguy@gmail.com', 'Johnny Bravo'); // Add a recipient/mustomer to deliver email to - put inside "to" email header
//$mail->Replyto = 'replytoemail@address.com';    //$_POST['email'];
$mail ->addAddress('rutger_10@hotmail.com');
$mail ->addAddress('k.vassos9@gmail.com');


//$mail->addAddress('ellen@example.com');               // Name is optional, can have mulitple lines 
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Stage one of the world takeover';
$mail->Body    = 'What are we doing today??? Same thing we do everyday,,, trying to <b>take over the world!</b>'; // $_POST['body'];
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';  

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}