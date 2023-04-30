<?php
session_start();
include "navbar.php";
include "contact-form-handler.php";

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="contactUs.css">

    <!-- Nav Bar CSS link-->
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <!-- Footer CSS link-->
    <link rel="stylesheet" type="text/css" href="footer.css">

    <!-- Footer Icon link-->
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Taytay Agriculture | Contact Us</title>
</head>
<body>
    <div class="start"></div>

<div class="ne-text">
        <h1>CONTACT US</h1>
        </div>

    <div class="content">

        <a href="#">
        <div class="container1">
            <i class="fa-solid fa-phone fa-xl"></i>
            <h3>700-144-98</h3>
        </div>
        </a>
        <a href="#">
        <div class="container2">
            <i class="fa-sharp fa-solid fa-envelope fa-xl"></i>
            <h3>agriculture@taytayrizal.gov.ph</h3>
        </div>
    </a>
        <div class="filler"></div>
        <div class="filler"></div>
        
        <div class="ne-text">
        <h2>You may also contact us using this form</h2>
        </div>
        <div class="filler" style="height: 1vw;"></div>
        <form action="contact-form-handler.php" name="contact" method="POST">
            <div class="half1">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname">
            </div>
            <div class="half2">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname"><br><br>
            </div>
            <br><br><br>
            <label for="uemail">E-mail</label>
            <input type="email" id="uemail" name="uemail">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject">
            <label for="message">Write a message</label>
            <textarea name="message" placeholder="Type in your message here."></textarea>
            <?php
            // Check if a success or error message is set in the URL query string
            if (isset($_GET['success'])) {
                $message = $_GET['success'];
                $alert_type = 'success';
            } elseif (isset($_GET['error'])) {
                $message = $_GET['error'];
                $alert_type = 'error';
            }

            // Display the message to the user
            if (isset($message)) {
                echo '<div class="alert alert-'.$alert_type.'" role="alert">'.$message.'</div>';
            }
            ?>
            <button type="submit" name="submit" value="Submit">Submit</button>
        </form>

        <div class="filler" style="height: 2vw;"></div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d685.2294305271922!2d121.1332975871802!3d14.5582138783657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c71c6975e357%3A0xde76a7bf117d5749!2sTaytay%20Agricultural%20Office!5e0!3m2!1sen!2sph!4v1681814912964!5m2!1sen!2sph" 
             allowfullscreen="true" name="Taytay Agriculture"
            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        </div>
        <div class="filler"></div>
    </div>
    
</body>
<?php include "footer.html"; ?>
</html>