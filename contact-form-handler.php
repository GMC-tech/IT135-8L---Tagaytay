<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$alert = '';
if(isset($_POST["submit"])) {
   //Retrieve form data
   $first_name = $_POST['firstname'];
   $last_name = $_POST['lastname'];
   $email = $_POST['uemail'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   try {
      //Server settings
     // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'acadstoragenc1@gmail.com';                     //SMTP username
      $mail->Password   = 'yzypxdtqqkurpjqs';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom( $email, 'Taytay Agriculture Office | Contact Form');
      $mail->addAddress('test.taytayagri@gmail.com', 'Receiver'); //can be changed to the actual e-mail of Taytay Agriculture (so they will receive the inquiries)
      $mail->addReplyTo($email, $first_name . ' ' . $last_name);
  
      //Attachments
     // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $subject;
      $mail->Body    = "<b>This Message is from:</b> $first_name $last_name <br> <b>Email:</b> $email <br> <b>Message:</b> <br>  $message " ;
  
      $mail->send();
    // Redirect back to contact page with success message
      header("Location: contactUs.php?success=Message%20successfully%20sent");
      exit;
    //echo 'Message has been sent';
  } catch (Exception $e) {
    // Redirect back to contact page with error message
      header("Location: contactUs.php?error=Message%20not%20sent");
      exit;
      //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }


}

