<?php 

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom('wsgestor@gmail.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('desyugo@hotmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('desyugo@hotmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'El sujeto cualquieras';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.php'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('vendor/phpmailer/phpmailer/examples/images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "El error al enviar el mail es: " . $mail->ErrorInfo;
} else {
    echo "El mensaje fue enviado!";
}

 ?>