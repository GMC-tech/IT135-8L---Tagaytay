<?php
global $conn;
session_start();

    include "config.php";
    include "admin-navbar.php";

if(isset($_POST['new']) && $_POST['new']==1)
{
    $first = $_POST['firstname'];
    $last = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirmpassword'];
    if (empty($username) || empty($password) || empty($first) || empty($last) || empty($email)) {
        echo "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } elseif ($password != $confirm) {
        echo "Passwords do not match.";
    } else {
        $query = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            // Username already taken
            echo "Username is already taken. Please choose a different username.";
        }else{
            mysqli_query($conn, "INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`) VALUES (NULL,'$username','$password','$first','$last','$email')");

            echo "<div class='alert alert-success'>User Details Successfully Updated!</div>";

            header('location: viewUser.php');
        }
    }

}

mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="addUser.css">

    <!-- Nav Bar CSS link-->
    <link rel="stylesheet" type="text/css" href="admin-navbar.css">

    <!-- Footer CSS link-->
    <link rel="stylesheet" type="text/css" href="footer.css">

    <!-- Footer Icon link-->
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    

        
    <title>Add User | Taytay Agriculture Office</title>
</head>
<body>

    <!-- Sign Up Form -->
	<div class="return-container">
    <a href="viewUser.php">
	<button type="return" id="return-btn">Return</button>
    </a>
	</div>
    <div class="container">
	
	
        <div class="content">
		
            <h1><center>ADD USER<center></h1>
            <div class="forms">
                <form action="add-User.php">
                    <input type="hidden" name="new" value="1" />
                    <label for="firstname">First Name</label><br>
                    <input type="text" id="firstname" name="firstname" required><br>
 
                    <label for="lastname">Last Name</label><br>
                    <input type="text" id="lastname" name="lastname" required><br>
					
					<label for="username">Username</label><br>
                    <input type="text" id="username" name="username" required><br>
					
					<label for="email">Email</label><br>
                    <input type="text" id="email" name="email" required><br>
					
					<label for="password">Password</label><br>
                    <input type="text" id="password" name="password" required><br>
					
					<label for="confirmpassword">Confirm Password</label><br>
                    <input type="text" id="confirmpassword" name="confirmpassword" required><br>
					<span class="adduserbutton">
                    <button type="submit" id="submit-btn">ADD USER</button>
					</span>
                </form>
            </div>
        </div>
    </div>

<?php include "footer.html";?>
</body>
</html>