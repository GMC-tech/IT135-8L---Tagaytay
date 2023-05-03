<?php 
      session_start();
      include "config.php";
      include "navbar.php"; ?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News | Taytay Agriculture Office</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- Nav Bar CSS link-->
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <!-- Footer CSS link-->
    <link rel="stylesheet" type="text/css" href="footer.css">

    <!-- Footer Icon link-->
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style >

.ne-text{
    width: 100%;
    text-align: center;
    margin-top: 80px;
    margin-bottom: 50px;
  }

  .ne-text h1{
    font-family: 'General Sans-Semibold';
    color: #033296;
  }

  .ne-section *{
    padding:0;
    margin: 0;
    box-sizing: border-box;
}

  .ne-section{
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1.5rem;
}

.ne-container{
    width: 80%;
    padding: 0 1.5rem;
    margin: 0 auto;
}

.ne-content{
    display: flex;
    background-color: #fff;
    box-shadow: 2px 2px 5px #9E9E9E, -1px -1px 5px #9E9E9E;
    border-radius: 3px;
}

.ne-content-img{
    flex: 1;
}

.ne-content-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.ne-content-text{
    flex: 1.5;
    padding: 4rem;
}

.ne-content-text .ne-content-title{
    font-family:'General Sans-Semibold' ;
    color: #222;
    font-size: 1.7vw;
}

.ne-content-text .ne-content-paragraph{
  font-family:'General Sans' ;
    font-size: 1.2vw;
    margin-bottom: 2rem;
    margin-top: 2rem;
}

.ne-content-text .btn{
  padding-top: 10px;
  font-family: 'General Sans';
  font-size: 1vw;
  background: #033296;
  border: 1px solid #486284;
  border-radius: 50px;
  color: white;
  width: 210px;
  height: 48px;
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-size: 15px;
}

.ne-content-text .btn:hover {
  background-color: #0a22fc;
  color: white;
}

.start{
  margin-top: 9.5vw;
}

.end{
  margin-bottom: 4.5vw;
}

.btn-container{
  width: 100%;
  display: flex;
  justify-content: center;
  gap: 1%;
  
}

.btn-container .btn{
  padding-top: 10px;
  font-family: 'General Sans';
  font-size: 1vw;
  background: #033296;
  border: 1px solid #486284;
  border-radius: 50px;
  color: white;
  width: 210px;
  height: 48px;
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-size: 15px;
}
  
.btn-container .btn:hover {
  background-color: #0a22fc;
  color: white;
}

.btn-container .active {
  background-color: white;
  border: 2px solid blue;
  color: blue;
}

</style>
</head>
<body>

<div class="start"></div>

<div class="btn-container">
<a href="news-headline.php" class="btn active">NEWS</a>
<a href="event-headline.php" class="btn">EVENTS</a>
</div>



<div class="ne-text">
    <h1>NEWS</h1>
  </div>
  <?php
$ret=mysqli_query($conn,"SELECT * FROM contents WHERE category_id = 2 ORDER BY content_id DESC");
if (!$ret) {
    die("Error executing query: " . mysqli_error($conn));
}
while ($row=mysqli_fetch_array($ret)) {

?>
  <section class="ne-section">
    <div class="ne-container">
        <div class="ne-content">
            <div class="ne-content-img">
            <img src="<?php echo $row['img']?>">
            </div>
            <div class="ne-content-text">
                <h2 class="ne-content-title"><?php  echo $row['title'];?></h2>
                <p class="ne-content-paragraph"><?php  echo $row['description'];?></p>
                <a href="news-content.php?newsid=<?php echo $row['content_id'];?>" class="btn">READ MORE</a>
            </div>
        </div>
    </div>
  </section>
<div class="end"></div>
<?php }?>
<?php include "footer.html"; ?>

</body>
</html>
