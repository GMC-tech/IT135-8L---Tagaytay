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
  <title>Programs | Taytay Agriculture Office</title>
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

.programs-text{
    width: 100%;
    text-align: center;
    margin-top: 80px;
    margin-bottom: 50px;
  }

  .programs-text h1{
    font-family: 'General Sans-Semibold';
    color: #033296;
  }

  .programs-section *{
    padding:0;
    margin: 0;
    box-sizing: border-box;
}

  .programs-section{
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1.5rem;
}

.programs-container{
    width: 80%;
    padding: 0 1.5rem;
    margin: 0 auto;
}

.programs-content{
    display: flex;
    background-color: #fff;
    box-shadow: 2px 2px 5px #9E9E9E, -1px -1px 5px #9E9E9E;
    border-radius: 3px;
}

.programs-content-img{
    flex: 1;
}

.programs-content-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.programs-content-text{
    flex: 1.5;
    padding: 4rem;
}

.programs-content-text .programs-content-title{
    font-family:'General Sans-Semibold' ;
    color: #222;
    font-size: 1.7vw;
}

.programs-content-text .programs-content-paragraph{
  font-family:'General Sans' ;
    font-size: 1.2vw;
    margin-bottom: 4rem;
    margin-top: 4rem;
}

.programs-content-text .btn{
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

.programs-content-text .btn:hover {
  background-color: #0a22fc;
  color: white;
}

.start{
  margin-top: 9.5vw;
}

.end{
  margin-bottom: 4.5vw;
}

</style>
</head>
<body>

<div class="start"></div>



<div class="programs-text">
    <h1>PROGRAMS</h1>
  </div>
<?php
$ret=mysqli_query($conn,"SELECT * FROM contents WHERE category_id = 1 ORDER BY content_id DESC");
if (!$ret) {
    die("Error executing query: " . mysqli_error($conn));
}





while ($row=mysqli_fetch_array($ret)) {

?>
  <section class="programs-section">
    <div class="programs-container">
        <div class="programs-content">
            <div class="programs-content-img">
                
                <img src="<?php echo $row['img']?>">
            </div>
            <div class="programs-content-text">
                <h2 class="programs-content-title"><?php  echo $row['title'];?></h2>
                <p class="programs-content-paragraph"><?php  echo $row['description'];?></p>
                <a href="programs-content.php?progid=<?php echo $row['content_id'];?>" class="btn">LEARN MORE</a>
            </div>
        </div>
    </div>
  </section>



<?php 
}
 ?>
<div class="end"></div>

<?php include "footer.html"; ?>

</body>
</html>
