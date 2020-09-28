<?php
include 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail=new PHPMailer();
$mail->SMTPDebug = 2;
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->SMTPSecure="tls";
$mail->SMTPAuth="true";
$mail->Port="587";
$mail->Username="learncp5@gmail.com";
$mail->Password="Learncp13169";
$mail->Subject="Test";
$mail->setFrom("learncp@gmail.com");
$mail->Body="This is";
$mail->addAddress("radhagupta.9bce@gmail.com");
$mail->addCC('sraj13169@gmail.com');
$mail->addBCC('radhagupta3078@gmail.com');
$mail->addAttachment('hello.txt');
$mail->isHTML(true); 
if($mail->Send()){
    echo "email sent..";
}
else{
    echo "error";
}
$mail->smtpClose();
?>