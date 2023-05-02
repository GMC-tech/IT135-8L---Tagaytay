<?php
    session_start();
    include "config.php"; 
    include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="home.css">

    <!-- Nav Bar CSS link-->
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <!-- Footer CSS link-->
    <link rel="stylesheet" type="text/css" href="footer.css">
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    


  <title>Home | Taytay Agriculture Office</title>
</head>
<body>
  
  <div class="start"></div>

  <!-- headline -->


  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">

    <!-- headline contents -->
    <a href="https://www.facebook.com/TaytayAgriculture">    
        <div class="carousel-item active c-item">
            <img src="home-headline-image/1.png" class="d-block w-100 c-img" alt="Slide 1">
            <div class="carousel-caption">
            <h1>Fur Babies-Taytay is now powered by UNAHCO!</h1>
            <h5>As of 1:00 PM ubos na po ang freebies from our generous sponsor. Ang Doggissentials ay namamahagi ng free AppeBoost vitamins at Bubble Bath Grooming Shampoo.</h5>
            </div>
        </div>
    </a>

    <a href="https://www.facebook.com/TaytayAgriculture">
        <div class="carousel-item c-item">
            <img src="home-headline-image/2.png" class="d-block w-100 c-img" alt="Slide 2">
            <div class="carousel-caption">
                <h1>FREE FREE FREE</h1>
                <h5>Ang ating Tanggapan ay namamahagi rin libreng buto, seedlings, fertilizers, at IEC materials dito sa ating Fur Babies Day Out until supplies last, located at San Juan Gym.</h5>
            </div>
        </div>
    </a>

    <a href="https://www.facebook.com/TaytayAgriculture">
        <div class="carousel-item c-item">
            <img src="home-headline-image/3.png" class="d-block w-100 c-img" alt="Slide 3">
            <div class="carousel-caption">
                <h1>NOW HAPPENING: Fur Babies Day Out at San Juan Gymnasium, Barangay Dolores until 5:00 PM today only.</h1>
                <h5>Ang programang ito ay hatid sa atin ng Rizal Provincial Goverment sa pamumuno ng ating Gov. Nina Ynares sa pakikipagtulungan ng ating Pamahalaang Bayan sa pamumuno ng ating Mayor Allan De Leon  kasama ang UNAHCO.</h5>
            </div>
        </div>
    </a>
    <!-- end of headline contents -->
    
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--END OF  headline -->


<!--OUR PROGRAMS -->
  <div class="programs-text">
    <h1>OUR PROGRAMS</h1>
  </div>
  
  <div class="programs-container">
    <div class="row gy-3">
      <div class="col-md-4 n-item">
  
      <a href="programs1.php">
        <div class="programs-card">
          <img src="home-headline-image/eskwelanihan.png" class="card-img-top" alt="...">
          <div class="programs-card-body">
            <h5 class="programs-card-title">Eskwelanihan</h5>
          </div>
        </div>
      </a>
  
      </div>
  
      <div class="col-md-4 n-item">
  
        <a href="programs2.php">
          <div class="programs-card">
            <img src="home-headline-image/ugat.png" class="card-img-top" alt="...">
            <div class="programs-card-body">
              <h5 class="programs-card-title">UGAT</h5>
            </div>
          </div>
        </a>
  
      </div>
  
      <div class="col-md-4 n-item">
        <a href="programs3.php">
          <div class="programs-card">
            <img src="home-headline-image/gabay.png" class="card-img-top" alt="...">
            <div class="programs-card-body">
              <h5 class="programs-card-title">Gabay Taytay Agri</h5>
            </div>
          </div>
        </a>
        
      </div>
    </div>

  </div>

  <div class="programs-container">
    <div class="row gy-3">
      <div class="col-md-4 n-item">
  
      <a href="programs4.php">
        <div class="programs-card">
          <img src="home-headline-image/farm-visit.png" class="card-img-top" alt="...">
          <div class="programs-card-body">
            <h5 class="programs-card-title">Farm Visitation</h5>
          </div>
        </div>
      </a>
  
      </div>
  
      <div class="col-md-4 n-item">
  
        <a href="programs5.php">
          <div class="programs-card">
            <img src="home-headline-image/tech-cons.png" class="card-img-top" alt="...">
            <div class="programs-card-body">
              <h5 class="programs-card-title">Technical Consultation</h5>
            </div>
          </div>
        </a>
  
      </div>
  
      <div class="col-md-4 n-item">
        <a href="programs6.php">
          <div class="programs-card">
            <img src="home-headline-image/seminar.png" class="card-img-top" alt="...">
            <div class="programs-card-body">
              <h5 class="programs-card-title">Seminar Series</h5>
            </div>
          </div>
        </a>
        
      </div>
    </div>

  </div>
  
  
    <div class="programs-button">
      <a href="programs.php">  
        <input type="submit" value="LEARN MORE"/>  
       </a>
    </div>

  <!-- END OF Our Programs -->


   <!-- ABOUT US-->

  <div class="about-text">
    <h1>ABOUT US</h1>
  </div>

  <section class="about-section">
    <div class="about-container">
        <div class="content">
            <div class="content-img">
                <img src="home-headline-image/about.jpg" >
            </div>
            <div class="content-text">
                <h2 class="content-title">The Office For Agricultural Services - Taytay, Rizal.</h2>
                <p class="content-paragraph">The Office for Agricultural Services Taytay is the primary department responsible for the promotion of agricultural development by providing the extension works, transfer of technology, provision of inputs, technical assistance and support services needed for domestic production.</p>
                <a href="aboutUs.php" class="btn">LEARN MORE</a>
            </div>
        </div>
    </div>
</section>

<!-- END OF ABOUT US-->


<!-- NEWS AND EVENTS-->
<div class="news-text">
  <h1>NEWS AND EVENTS</h1>
</div>

<div class="news-container">
  <div class="row gy-3">
    <div class="col-md-4 n-item">

    <a href="#">
      <div class="card">
        <img src="home-headline-image/1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">Fur Babies-Taytay is now powered by UNAHCO!</h4>
          <p class="card-text">As of 1:00 PM ubos na po ang freebies from our generous sponsor. Ang Doggissentials ay namamahagi ng free AppeBoost vitamins at Bubble Bath Grooming Shampoo.</p>
        </div>
      </div>
    </a>

    </div>

    <div class="col-md-4 n-item">

      <a href="#">
        <div class="card">
          <img src="home-headline-image/2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title">FREE FREE FREE</h4>
            <p class="card-text">Ang ating Tanggapan ay namamahagi rin libreng buto, seedlings, fertilizers, at IEC materials dito sa ating Fur Babies Day Out until supplies last, located at San Juan Gym.</p>
          </div>
        </div>
      </a>

    </div>

    <div class="col-md-4 n-item">
      <a href="#">
        <div class="card">
          <img src="home-headline-image/3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title">NOW HAPPENING: Fur Babies Day Out</h4>
            <p class="card-text">Ang programang ito ay hatid sa atin ng Rizal Provincial Goverment sa pamumuno ng ating Gov. Nina Ynares sa pakikipagtulungan ng ating Pamahalaang Bayan sa pamumuno ng ating Mayor Allan De Leon  kasama ang UNAHCO.</p>
          </div>
        </div>
      </a>
      
    </div>


  </div>

  

</div>


  <div class="programs-button">
    <a href="news-headline.php">  
      <input type="submit" value="LEARN MORE"/>  
     </a>
  </div>

  <div class="end"></div>

  <!-- Messenger Chat Plugin Code -->
  <div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "107342252354635");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v16.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>


</body>
</html>

    <!-- Redirect to Log In page -->
   
<?php include "footer.html" ?>
