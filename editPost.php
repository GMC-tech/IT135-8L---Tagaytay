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
    <link rel="stylesheet" type="text/css" href="edit-post.css">

    <!-- Nav Bar CSS link-->
    <link rel="stylesheet" type="text/css" href="admin-navbar.css">

    <!-- Footer CSS link-->
    <link rel="stylesheet" type="text/css" href="footer.css">

    <!-- Footer Icon link-->
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    

        
    <title>Edit Post | Taytay Agriculture Office</title>
</head>
<body>



    <!-- Sign Up Form -->
	<div class="return-container">
	<button type="return" id="return-btn">Return</button>
	</div>
    <!-- Insert the previous code here -->
    <div class="container">
    <div class="content">
        <?php
        $content_id=$_GET['id']; //get id which we want to update
        $sql="SELECT contents.content_id,contents.title,contents.user_id,contents.description,category.category_name,contents.date_posted,contents.img,contents.category_id FROM contents
        LEFT JOIN category ON contents.category_id=category.category_id
        WHERE content_id={$content_id}";

        $result=mysqli_query($conn,$sql) or die("Query failed ");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <h1><center>EDIT POST<center></h1>
            <div class="forms">
                <form action="update-Post.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="content_id" value="<?php echo $content_id; ?>">
                    <label for="title">Title</label><br>
                    <input type="text" id="title" name="title" value="<?php echo $row['title']?>" required><br>

                    <label for="description">Description</label><br>
                    <textarea id="description" name="description" required><?php echo $row['description']?></textarea><br><br>

                    <label for="category">Category</label><br>
                    <select name="category" required>
                        <option disabled selected value=""> Select Category</option>
                        <?php
                            $sql1="SELECT * FROM category";
                            $result1=mysqli_query($conn,$sql1) or die("Query Failed");

                            if(mysqli_num_rows($result1)> 0){
                                while($row1=mysqli_fetch_assoc($result1)){
                                    if($row["category_id"]==$row1["category_id"]){ 
                                        $selected="selected";
                                    }else{
                                        $selected="";
                                    }
                                    echo "<option {$selected} value='{$row1['category_id']}'> {$row1['category_name']} </option>";
                                }
                            }
                        ?>
                    </select>
                    <br><br>
					
					
					<label for="image">Upload Image</label><br>
					<div class="rectangle">
					<label for="image-upload" class="custom-image-upload">
					<img src="chooseImageIcon.png" alt="Upload Icon" class="upload-icon">Choose Image</label>
					<input type="file" id="image-upload" name="image-upload" accept="img/*" value="<?php echo htmlspecialchars($row['img'])?>" style="display: none;"><br>
					</div><br><br>
					
					<span class="edit-post">
                    <button type="submit" id="submit-btn">SAVE POST</button>
					</span>
                </form>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>




    <!-- Footer -->
<?php include "footer.html"; ?>
</body>
</html>