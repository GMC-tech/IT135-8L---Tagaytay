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
    margin-top: 10px;
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
 text-align: justify;
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
  justify-content: left;
  padding-left: 50px;
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




.ne-content-img2 img{
  float: left;
  width: 400px;
  height: 320px;
  padding: 0 30px 0 0
}

.text {
  text-align: justify;
  padding-left: 10px;
}

.text h2{
    font-family:'General Sans-Semibold' ;
    color: #222;
    font-size: 1.7vw;
    margin-bottom: 10px;
}


.text p{
  text-align: justify;
    font-family:'General Sans' ;
    font-size: 1.2vw;
    margin-top: 2rem;
}

.text p1 {
    font-family:'General Sans' ;
    font-size: 1.2vw;
    color: gray;
}

</style>
</head>
<body>

<div class="start"></div>

<div class="btn-container">
<a href="news-headline.php" class="btn">Return </a>
</div>


  <section class="ne-section">
    <div class="ne-container">
        <div class="ne-content">
            <div class="ne-content-img2">
                <img src="img/news_5.jpg" >
            <div class="text">
                <h2>Team UGAT goes to CRESDAVILLE 1!</h2>
		    <p1>April 19, 2023</p1>
                <p>Bilang tugon sa pakikiisa ng Cresdaville 1 Subdivision sa ating programang Urban Augmentation Taytay Program, ang ating team UGAT ay pinangunahan ang land preparation, plastic mulching at transplanting sa nasabing lugar. Ang mga senior citizens at residente ang magmamaintain ng kanilang urban garden. <br>
Ito ay patuloy na susuportahan at tutulungan ng ating team UGAT hanggang sa mapaganda ang kanilang urban garden.<br>
Ang programang UGAT ay hatid sa atin ng Pamahalaang Bayan sa pamumuno ng ating Mayor Allan De Leon at Pambayang Tanggapan ng Agrikultura.</p>
            </div>
            </div>
        </div>
    </div>
  </section>



<div class="end"></div>

<?php include "footer.html"; ?>

</body>
</html>
