<?php 
      session_start();
      include "config.php";
      include "navbar.php"; ?>
<!DOCTYPE html>
<html>
<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Nav Bar CSS link-->
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <!-- Footer CSS link-->
    <link rel="stylesheet" type="text/css" href="footer.css">

    <!-- Footer Icon link-->
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style >

.button {
  background-color: #033296; 
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
}

.button1 {border-radius: 25px; 
		  font-size: 30px;
		  padding: 20px;
		  width: 300px;
		  margin: 4px 20px;}
		  
.button2 {border-radius: 25px; 
		  font-size: 16px;
		  padding: 10px;
		  width: 120px;
		  margin: 4px 5px;}		  

.button1:hover {
  background-color: #555555;
  color: white;}
  
.button2:hover {
  background-color: #555555;
  color: white;}

span{
font-size: 16px;
width:80%;
position: relative;}

img.body{
padding: 10px 90px;
width:50%;
}
.aligned{
display: flex;
align-items: center}
  
</style>
</head>
<body>


<br><br>


<div style="text-align:center">
<a href="News.php" class="button button1"><b>News</b></a>
<a href="Events.php" class="button button1"><b>Events</b></a>
</div>
<br><br>


<h1 style="text-align:center">NEWS AND EVENTS</h1>

<br><br>

<div class="aligned">
<img class="body" src="img/9.jpg">

<span><h2> NOW HAPPENING: Fur Babies Day Out </h2> Ang programang ito ay hatid sa atin ng Rizal Provincial Goverment sa pamumuno ng ating Gov. 
Nina Ynares sa pakikipagtulungan ng ating Pamahalaang Bayan sa pamumuno ng ating Mayor Allan De Leon kasama 
ang UNAHCO. Ang ating Tanggapan ay namamahagi rin ng buto, seedlings, at IEC materials.Sed urna massa adipiscing egestas
 accumsan aliquet mauris egestas turpis. Vitae pulvinar lobortis vel ut at. Sed urna massa adipiscing egestas accumsan
 aliquet mauris egestas turpis. Vitae pulvinar lobortis vel ut at. SSed urna massa adipiscingSed urna massa 
 adipiscing egestas accumsan aliquet mauris egestas turpis. Vitae pulvinar lobortis vel ut at. <br><br> <a href="News.html" class="button button2"><b>Read More</b></a></span>

</div>
   
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>

<?php include "footer.html"; ?>

</body>
</html>
