<?php
    session_start();
    include "config.php"; 
    include "admin-navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="admin-home.css">
  
  <title>Admin Home | Taytay Agriculture Office</title>
</head>
<body>   
    <div class="admin-welcome">
        <h1> ADMIN PANEL </h1>
    </div>

    <div class="admin-home-button">
      <a href="admin-managePost.php">  
        <input type="submit" value="MANAGE POSTS"/>  
       </a>
    </div>

    <div class="admin-home-button">
      <a href="viewUser.php">  
        <input type="submit" value="MANAGE USERS"/>  
       </a>
    </div>
    <br><br><br><br>

</body>
</html>
<?php include "footer.html" ?>