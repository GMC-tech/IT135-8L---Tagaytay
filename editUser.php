<?php
global $conn;
session_start();
include "config.php";

if($_SESSION['user_type']==0){
    include "navbar.php";
} elseif ($_SESSION['user_type']==1){
    include "admin-navbar.php";
} else{
    include "navbar.php";
}



$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_id` = '$id'");

$resultData = mysqli_fetch_assoc($result);

$firstname = $resultData['first_name'];
$lastname = $resultData['last_name'];
$email = $resultData['email'];
$password = $resultData['password'];
$username = $resultData['username'];
?>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="edit-user.css">

    <!-- Nav Bar CSS link-->
    <link rel="stylesheet" type="text/css" href="admin-navbar.css">

    <!-- Footer CSS link-->
    <link rel="stylesheet" type="text/css" href="footer.css">

    <!-- Footer Icon link-->
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    	
	<title>Edit User | Taytay Agriculture Office</title>
</head>

<body>
    <!-- Sign Up Form -->
	<div class="return-container">

        <?php if($_SESSION['user_type']==1): ?>
    <a  href="viewUser.php">
	<button type="return" id="return-btn">Return</button>
    </a>
        <?php else:?>
                <a href="user_profile.php">
                    <button type="return" id="return-btn">Return</button>
                </a>
                <?php endif; ?>
	</div>
    <div class="container">
	
	
        <div class="content">
            <h1><center>EDIT USER<center></h1>
            <div class="forms">
                <form name="edit" action="edit-User.php" method="POST">
                    <label for="firstname">First Name</label><br>
                    <input type="text" name="firstname" value="<?php echo $firstname; ?>" required><br>
 
                    <label for="lastname">Last Name</label><br>
                    <input type="text" name="lastname" value="<?php echo $lastname; ?>" required><br>
					
					<label for="username">Username</label><br>
                    <input type="text" name="username" value="<?php echo $username; ?>" required><br>
					
					<label for="email">Email</label><br>
                    <input type="text" name="email" value="<?php echo $email; ?>" required><br>
					
					<label for="password">Password</label><br>
                    <input type="password" name="password" value="<?php echo $password; ?>" required><br>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
					
					<span class="edit-user-button">
                    <button type="submit" name="update" value="Update" id="submit-btn">EDIT USER</button>
					</span>
                </form>
            </div>
        </div>
    </div>

	</form>
</body>
<?php include "footer.html"; ?>
</html>