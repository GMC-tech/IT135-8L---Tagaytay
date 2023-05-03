<?php
global $conn, $query;
session_start();
require_once("config.php");
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




        <script>
            // Wait for the DOM to be ready
            $(document).ready(function() {
                // Handle click event for "Edit Profile" button
                $('.profile-home-button a[data-target="#editModal"]').click(function() {
                    $('#editModal').modal('show');
                });
            });
        </script>

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
        <a href="#">
            <input type="submit" value="SIGNED UP PROGRAMS"/>
        </a>
    </div>

    <div class="profile-home-button">
        <a href="editUser.php?id=<?php if (!empty($_SESSION['username'])):
    echo $_SESSION['user_id']; ?>">
            <input type="submit" value="EDIT PROFILE"/>
        </a>
        <?php endif;?>
    </div>

    <div class="end"></div>

    </body>
    </html>
<?php include "footer.html" ?>