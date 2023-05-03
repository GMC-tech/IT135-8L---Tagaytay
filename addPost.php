<?php

global $conn;
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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="addPost.css">

    <!-- Nav Bar CSS link-->
    <link rel="stylesheet" type="text/css" href="admin-navbar.css">

    <!-- Footer CSS link-->
    <link rel="stylesheet" type="text/css" href="footer.css">

    <!-- Footer Icon link-->
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    

        
    <title>Add Post | Taytay Agriculture Office</title>
</head>
<body>



    <!-- Sign Up Form -->
    <div class="btn-container">
<a href="admin-managePost.php" class="btn">Return </a>
</div>
    <div class="container">
	
	
        <div class="content">
		
            <h1><center>ADD POST<center></h1>
            <div class="forms">
                <form action="add-Post.php" method="POST" enctype="multipart/form-data">>
                    <label for="title">Title</label><br>
                    <input type="text" id="title" name="title" required><br>

                    <label for="headline">Headline</label><br>
                    <input type="text" id="title" name="title" required><br>
 
					<label for="description">Write description</label><br>
                    <textarea id="description" name="description" required></textarea><br><br>
					
					<label for="category">Category</label><br>
                    <select name="category" required>
                            <option disabled selected value=""> Select Category</option>
                            <?php
                                $sql="SELECT * FROM category";
                                $result=mysqli_query($conn,$sql) or die("Query Failed");
                                if(mysqli_num_rows($result)> 0){
                                    while($row=mysqli_fetch_assoc($result)){
                                        echo "<option value='{$row['category_id']}' required>{$row['category_name']}</option>";
                                    }
                                }
                            ?>
                    </select>
                    <br><br>
					
					<label for="image">Upload Image</label><br>
					<div class="rectangle">
					<label for="image-upload" class="custom-image-upload">
					<img src="chooseImageIcon.png" alt="Upload Icon" class="upload-icon">Choose Image</label>
					<input type="file" id="image-upload" name="image-upload" accept="img/*" style="display: none;"><br>
					</div><br><br>
					
					<span class="add-post">
                    <button type="submit" id="submit-btn">ADD POST</button>
					</span>
                </form>
            </div>
        </div>
    </div>



    <!-- Footer -->
<?php include "admin-footer.html"; ?>
</body>
</html>