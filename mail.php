<?php

/*
Author: Ramesh K
Date: 14-1-2015
*/
require_once('class.phpmailer.php');
$mail             = new PHPMailer();
//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);
$body = "Hey !Planning to spend this vacation, in a treehouse?Book yourself a destination now! :D for more details, contact: sagarika.719@gmail.com  Disclaimer: This mail has been generated from the  mail server connected to my web page. ";
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "your gmail id";  // GMAIL username
$mail->Password   = "your mail password";            // GMAIL password

$mail->SetFrom('your gmail id', 'gmail username'); //if it is different from username also no issues

//$mail->AddReplyTo("rameshkonda111@gmail.com","ramesh");

$mail->Subject    = "TreeHouse.in";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional

$mail->MsgHTML($body);

$person=$_POST['name1'];
 $to=$_POST['username'];
//$address = "sweetpriyanshim@gmail.com";
$mail->AddAddress($to,"Dear Customer");

$mail->AddAttachment("treehouse3.jpg");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Message not send ";
} else {
  echo "Message sent!";
}
    
?>
