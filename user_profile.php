<?php
global $conn;
session_start();
include "config.php";
include "navbar.php";
include "contact-form-handler.php";
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="user_profile.css">

        <title><?php if(!empty($_SESSION['username'])):
                echo $_SESSION['username'];
            ?> | Taytay Agriculture Office</title>
            <?php endif;?>
    </head>
    <body>
    <div class="start"></div>
    <div class="profile-welcome">
        <h1>  <?php if(!empty($_SESSION['username'])):
            echo $_SESSION['username'];
            ?> </h1>
        <?php endif;?>
    </div>

    <div class="profile-home-button">
        <a href="profile-managePost.php">
            <input type="submit" value="MANAGE PROGRAMS AND EVENTS"/>
        </a>
    </div>

    <div class="profile-home-button">
        <a href="viewUser.php">
            <input type="submit" value="EDIT PROFILE"/>
        </a>
    </div>
    <div class="end"></div>

    </body>
    </html>
<?php include "footer.html" ?>