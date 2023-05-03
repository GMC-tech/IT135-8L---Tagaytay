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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" type="text/css" href="admin-managePost.css">

    <!-- Nav Bar CSS link-->
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <!-- Footer CSS link-->
    <link rel="stylesheet" type="text/css" href="footer.css">
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    


    <link rel="stylesheet" type="text/css" href="admin-managePost.css">
    <title>Manage Programs | Taytay Agriculture Office</title>
</head>
<body>

    <div class="start"></div>

    <div class="btn-container">
        <a href="admin-managePost.php" class="btn">ALL POSTS</a>
        <a href="admin-managePrograms.php" class="btn active">PROGRAMS</a>
        <a href="admin-manageNews.php" class="btn">NEWS</a>
        <a href="admin-manageEvents.php" class="btn">EVENTS</a>
    </div>


    <div class="ne-text">
        <h1>PROGRAMS</h1>
      </div>

     <div class="manage-content">

        <table>
            <tbody>

                <!-- ADD POST -->

                <tr>
                    <td><img src="img/image-icon.png" alt=""></td>
                    <td><a href="addPost.php" class="publish">+ ADD POST</a></td>
                </tr>

                <!-- POSTED -->
                <?php
                    $sql = "SELECT contents.content_id,contents.img,contents.title,category.category_name,contents.date_posted,contents.user_id,contents.category_id FROM contents LEFT JOIN category ON contents.category_id=category.category_id WHERE contents.category_id='1'";
                    $result = mysqli_query($conn, $sql) or die("Query failed");
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                    <td> <img src='". $row["img"] ."'  alt=''></td>
                                    <td>" . $row["title"] . "</td>
                                    <td class='edit'><a href='editPost.php?id=" . $row["content_id"] . "' >EDIT</a></td>
                                    <td class='delete'><a href='delete-Post.php?id=" . $row["content_id"] . "&catid=" . $row["category_id"] . "'>DELETE</a></td>
                                </tr>";
                        }
                    }   
                ?>


            </tbody>
        </table>
        
    </div> 

    <div class="end"></div>
    
</body>
</html>
<?php include "admin-footer.html"; ?>