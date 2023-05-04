<?php
global $conn, $query, $user_id;
session_start();
include "config.php";
include "navbar.php";
include "contact-form-handler.php";

$result = mysqli_query($conn, "SELECT * FROM `users` ORDER BY `user_id` ");



$username = $_SESSION['username'];
$query = mysqli_query($conn, "SELECT user_id FROM users WHERE username = '$username'");
$result = mysqli_fetch_assoc($query);
$user_id = $result['user_id'];

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];}


?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="user_profile.css">



        <title><?php echo $username;
            ?> | Taytay Agriculture Office</title>



    </head>
    <body>
    <div class="start"></div>
    <div class="profile-welcome">
        <h1>  <?php echo $username;
            ?> </h1>


    </div>

    <div class="profile-home-button">
        <a href="user_viewSignedUp.php?id=<?php  echo $user_id?>">
            <input type="submit" value="SIGNED UP PROGRAMS"/>
        </a>
    </div>

    <div class="profile-home-button">
        <a href="editUser.php?id=<?php  echo $user_id?>">
            <input type="submit" value="EDIT PROFILE"/>
        </a>

    </div>

    <div class="end"></div>

    </body>
    </html>
<?php include "footer.html" ?>