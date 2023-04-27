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

  <section class="ne-section">
    <div class="ne-container">
        <div class="ne-content">
            <div class="ne-content-img">
                <img src="img/news_1.jpg" >
            </div>
            <div class="ne-content-text">
                <h2 class="ne-content-title">IDOF - Integrated Diversified Organic System</h2>
                <p class="ne-content-paragraph">Ang Pamahalaang Bayan sa pamumuno ng ating Smile Taytay Mayor Allan De Leon na kinatawan ng ating Tanggapan sa pamumuno ni Doc Ram Andres, kasama ng team UGAT, ay dumalo sa launching at blessing ng Montevedere Royale Integrated Diversified Organic Farm (IDOF) sa loob ng kanilang subdivision.
Ang nasabing programa ay dinaluhan ng Pamahalaang Panlalawigan ng Rizal sa pamumuno ng ating Gob. Nina Ynares na kinatawan ni Bokal Jun Cabitac at ng Provincial Agriculture Offfice sa pamumuno ni Doc Reynaldo Bonita.</p>
                <a href="News1.php" class="btn">READ MORE</a>
            </div>
        </div>
    </div>
  </section>

  <section class="ne-section">
    <div class="ne-container">
        <div class="ne-content">
            <div class="ne-content-img">
                <img src="img/news_2.jpg" >
            </div>
            <div class="ne-content-text">
                <h2 class="ne-content-title">LOST DOG</h2>
                <p class="ne-content-paragraph">Name: Monique
			Name: Monique<br>
			Breed: Mixed<br>
			Color: Light Brown<br>
			Sex: Female<br>
			Other Description: White belly<br>
			Last Seen: Sitio Burol, Barangay San Juan, Taytay, Rizal near Marina's Canteen, Apri 20, 2023. </p>
                <a href="News2.php" class="btn">READ MORE</a>
            </div>
        </div>
    </div>
  </section>

  <section class="ne-section">
    <div class="ne-container">
        <div class="ne-content">
            <div class="ne-content-img">
                <img src="img/news_3.jpg" >
            </div>
            <div class="ne-content-text">
                <h2 class="ne-content-title">SMILE KABATAAN AT AGRIKULTURA</h2>
                <p class="ne-content-paragraph">Bilang bahagi ng selebrasyon ng Earth Day 2023, ang ating Tanggapan ay naimbitahan upang pangunahan ang pagtuturo sa ating mga kabataan ng Paglilipat Tanim ng Gulay. Ang kanilang mga nailipat tanim ay siya rin nilang iuuwi upang palakihin sa kanilang mga bahay o bakuran.</p>
                <a href="News3.php" class="btn">READ MORE</a>
            </div>
        </div>
    </div>
  </section>

  <section class="ne-section">
    <div class="ne-container">
        <div class="ne-content">
            <div class="ne-content-img">
                <img src="img/news_4.jpg" >
            </div>
            <div class="ne-content-text">
                <h2 class="ne-content-title">UGAT SIMONA NATIONAL HIGH SCHOOL</h2>
                <p class="ne-content-paragraph">Patuloy ang pagbisita at aktibidad ng mga guro at team UGAT sa Gulayan sa Paaralan ng Simona National High School, Barangay San Isidro. Gumagamit sila ng mga recyclable material kagaya ng bote upang gawing taniman.</p>
                <a href="News4.php" class="btn">READ MORE</a>
            </div>
        </div>
    </div>
  </section>

  <section class="ne-section">
    <div class="ne-container">
        <div class="ne-content">
            <div class="ne-content-img">
                <img src="img/news_5.jpg" >
            </div>
            <div class="ne-content-text">
                <h2 class="ne-content-title">Team UGAT goes to CRESDAVILLE 1!</h2>
                <p class="ne-content-paragraph">Bilang tugon sa pakikiisa ng Cresdaville 1 Subdivision sa ating programang Urban Augmentation Taytay Program, ang ating team UGAT ay pinangunahan ang land preparation, plastic mulching at transplanting sa nasabing lugar. Ang mga senior citizens at residente ang magmamaintain ng kanilang urban garden.</p>
                <a href="News5.php" class="btn">READ MORE</a>
            </div>
        </div>
    </div>
  </section>

  <section class="ne-section">
    <div class="ne-container">
        <div class="ne-content">
            <div class="ne-content-img">
                <img src="img/news_weather.jpg" >
            </div>
            <div class="ne-content-text">
                <h2 class="ne-content-title">WEEKLY WEATHER OUTLOOK</h2>
                <p class="ne-content-paragraph">BY MONDAY UNTIL WEDNEDAY (16 - 19 APRIL), THE EASTERN SECTION OF LUZON WILL EXPERIENCE CLOUDY SKIES WITH SCATTERED RAINSHOWERS AND THUNDERSTORMS. THE REST OF THE COUNTRY WILL HAVE SUNNY TO PARTLY CLOUDY SKIES APART FROM ISOLATED AFTERNOON RAINSHOWERS AND THUNDERSTORMS.</p>
                <a href="News6.php" class="btn">READ MORE</a>
            </div>
        </div>
    </div>
  </section>

  <section class="ne-section">
    <div class="ne-container">
        <div class="ne-content">
            <div class="ne-content-img">
                <img src="img/news_7.jpg" >
            </div>
            <div class="ne-content-text">
                <h2 class="ne-content-title">LOST DOG</h2>
                <p class="ne-content-paragraph">Name: Peachie<br>
				Breed: Pomeranian<br>
				Sex: Female<br>
				Color: Black<br>
				Last seen: Along E. Rodriguez Ave. brgy san isidro, Taytay rizal</p>
                <a href="News7.php" class="btn">READ MORE</a>
            </div>
        </div>
    </div>
  </section>

  <section class="ne-section">
    <div class="ne-container">
        <div class="ne-content">
            <div class="ne-content-img">
                <img src="img/news_8.jpg" >
            </div>
            <div class="ne-content-text">
                <h2 class="ne-content-title">MISSING CAT</h2>
                <p class="ne-content-paragraph">Name: Squid<br>
				Sex: Male<br>
				Color: Black<br>
				Breed: Mixed<br>
				Other Description: With blue checkered collar, thinning hair on the eyebrow.</p>
                <a href="News8.php" class="btn">READ MORE</a>
            </div>
        </div>
    </div>
  </section>

<div class="end"></div>

<?php include "footer.html"; ?>

</body>
</html>
