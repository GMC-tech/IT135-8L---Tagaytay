<?php
    session_start();
    include "config.php"; 
    /* Navbar */
    include "admin-navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="addPost.css">

    <!-- Nav Bar CSS link-->
    <link rel="stylesheet" type="text/css" href="admin-navbar.css">

    <!-- Footer CSS link-->
    <link rel="stylesheet" type="text/css" href="footer.css">

    <!-- Footer Icon link-->
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    

        
    <title>Document</title>
</head>
<body>



    <!-- Sign Up Form -->
	<div class="return-container">
	<button type="return" id="return-btn">Return</button>
	</div>
    <div class="container">
	
	
        <div class="content">
		
            <h1><center>ADD POST<center></h1>
            <div class="forms">
                <form action="/add_user.php">
                    <label for="title">Title</label><br>
                    <input type="text" id="title" name="title" required><br>
 
                    <label for="description">Description</label><br>
                    <input type="text" id="description" name="description" required><br>
					
					<label for="category">Category</label><br>
                    <input type="text" id="category" name="category" required><br>
					
					<label for="message">Write Message</label><br>
                    <textarea id="message" name="message" required></textarea><br><br>
					
					<label for="image">Upload Image</label><br>
					<div class="rectangle">
					<label for="image-upload" class="custom-image-upload">
					<img src="chooseImageIcon.png" alt="Upload Icon" class="upload-icon">Choose Image</label>
					<input type="image" id="image-upload" name="image-upload" accept="image/*" style="display: none;"><br>
					</div><br><br>
					
					<span class="add-post">
                    <button type="submit" id="submit-btn">ADD POST</button>
					</span>
                </form>
            </div>
        </div>
    </div>



    <!-- Footer -->
<?php include "footer.html"; ?>
</body>
</html>