<?php
session_start();
include "config.php";
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
   $email = $_POST['email'];
   $subject = "Sign up to Program";
   $user_id = $_POST['user_id'];
   $prog_id = $_GET['progid'];
   $sql="SELECT * from contents where content_id={$prog_id}";
   $result=mysqli_query($conn,$sql) or die("Query failed ");
   if (mysqli_num_rows($result) > 0) {
       while ($row = mysqli_fetch_assoc($result)) {
          $prog_name = $row['title'];
       }

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
      $mail->setFrom( $email, 'Taytay Agriculture Office | Sign Up Form');
      $mail->addAddress('test.taytayagri@gmail.com', 'Receiver'); //can be changed to the actual e-mail of Taytay Agriculture (so they will receive the inquiries) alt email: taytayagriculturetest@gmail.com
      $mail->addReplyTo($email, $first_name . ' ' . $last_name);
  
      //Attachments
     // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $subject;
      $mail->Body    = "<b>This Message is from:</b> $first_name $last_name <br> <b>Email:</b> $email <br> <b>Message:</b> <br> This user signed up to the <b>$prog_name</b> program " ;
  
      $mail->send();
    // Redirect back to contact page with success message
    $content_id=$_GET['progid'];
    $sql1 = "INSERT INTO signup (user_id, content_id, is_SignedUp)
    VALUES ('$user_id', '$prog_id', '1')";
    if ($conn->query($sql1) === TRUE) {
        $location = "programs-content.php?progid=" . urlencode($prog_id) . "&success=Signed%20Up%20successfully!";
        header("Location: " . $location);
        exit;
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
        }


    //echo 'Message has been sent';
  } catch (Exception $e) {
    // Redirect back to contact page with error message
    $content_id=$_GET['progid'];
    $location = "programs-content.php?progid=" . urlencode($prog_id) . "&error=Sign%20Up%20unsuccessful.";
    header("Location: " . $location);
      exit;
      //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }


}
}
?>

