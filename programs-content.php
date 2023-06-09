<?php
global $conn;
session_start();
include "config.php";
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
  <link rel="stylesheet" type="text/css" href="programs-content.css">

    <!-- Nav Bar CSS link-->
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <!-- Footer CSS link-->
    <link rel="stylesheet" type="text/css" href="footer.css">

    <!-- Footer Icon link-->
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Taytay Agriculture | Contact Us</title>
</head>

<?php


if(isset($_GET['progid'])) {
    $content_id=$_GET['progid']; //get id which we want to update
    $sql="SELECT *from contents where content_id={$content_id}";

    $result=mysqli_query($conn,$sql) or die("Query failed ");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
?>
<body>
    <div class="start"></div>

<div class="ne-text">
        <h1><?php  echo $row['title'];?></h1>
        </div>

    <div class="content">

        
    <div class="image-container">
  <div class="image-wrapper">
  <img src="<?php echo $row['img'];?>" class="centered-image">
  </div>
</div>
<div class="text-container">
  <div class="text-wrapper">
    <p><?php  echo $row['description'];?></p>
  </div>
</div>

<?php }}
}?>

<?php
if (!empty($_SESSION['username'])) {
    // User is logged in
    $username=$_SESSION['username']; //get id which we want to update
    $sql1="SELECT * from users where username='{$username}'";

        $result1=mysqli_query($conn,$sql1) or die("Query failed ");

        if (mysqli_num_rows($result1) > 0) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
                //Get program ID from URL
                $content_id = $_GET['progid'];

                //Check if user has already signed up
                $sql2 = "SELECT * FROM signup WHERE user_id = {$row1['user_id']} AND content_id = $content_id AND is_SignedUp = 1 ";
                $result2 = mysqli_query($conn, $sql2);

                // If user has already signed up, display message and hide submit button
                if (mysqli_num_rows($result2) > 0) {
                    echo '<div class="alert alert-success" role="alert">You have already signed up for this program!</div>';
                    echo '<style>button[name="submit"] { display: none; }</style>';
                }
                // If user has not signed up yet, display the form with the submit button
                else {
?>

    <div class="ne-text">
    <h2>Sign Up</h2>
    </div>
                <form action="signup-form-handler.php?progid=<?php echo $_GET['progid']; ?>" name="contact" method="POST">
                    <input type="hidden" name="prog_id" value="<?php echo $content_id?>">
          <input type="hidden" name="user_id" value="<?php echo $row1['user_id']?> ">
          <input type="hidden" name="firstname" value="<?php echo $row1['first_name']?>">
          <input type="hidden" name="lastname" value="<?php echo $row1['last_name']?>">
          <input type="hidden" name="email" value="<?php echo $row1['email']?>">
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
                    if (isset($message) && mysqli_query($conn, $sql)) {
                        echo '<div class="alert alert-'.$alert_type.'" role="alert">'.$message.'</div>';
                    }
                    ?>
                    <button type="submit" name="submit" value="Sign Up Now">Sign Up Now</button>


    </form>

    <div class="filler" style="height: 2vw;"></div>


<?php
                }
}
        }
?>

    <?php
} else {
// User is not logged in / Guest
?>
        <div class="filler"></div>
        <div class="ne-text">
            <h2>Inquire</h2>
        </div>
        <div class="filler" style="height: 1vw;"></div>
        <form action="programs-form-handler.?progid=<?php echo $_GET['progid']; ?>" name="contact" method="POST">
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
        <div class="filler"></div>
    </div>
    <?php
    }
    ?>

</body>
<?php include "footer.html"; ?>
</html>