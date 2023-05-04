<?php
global $conn;
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


  <?php
  // Establish a MySQL database connection

  // Fetch the three latest posts from the database
  $query = "SELECT * FROM contents WHERE category_id = 2 ORDER BY date_posted DESC, content_ID DESC LIMIT 3";
  $result = mysqli_query($conn, $query);

  ?>

  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <?php
      // Generate carousel indicators dynamically
      for ($i = 0; $i < mysqli_num_rows($result); $i++) {
        if ($i == 0) {
          echo '<button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="' . $i . '" class="active" aria-current="true" aria-label="Slide ' . ($i + 1) . '"></button>';
        } else {
          echo '<button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="' . $i . '" aria-label="Slide ' . ($i + 1) . '"></button>';
        }
      }
      ?>
    </div>

    <div class="carousel-inner">
      <?php
      // Generate carousel items dynamically
      $counter = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        $counter++;
        $active = ($counter == 1) ? "active" : "";
        echo '<a>';
        echo '<div class="carousel-item ' . $active . ' c-item">';
        echo '<div class="c-item-overlay"></div>'; // Add overlay to blur background and hide text
        echo '<img src="' . $row["img"] . '" class="d-block w-100 h-100 c-img" alt="Slide ' . $counter . '">';
        echo '<div class="carousel-caption">';
        echo '<h1>' . $row["title"] . '</h1>';
        echo '<h5>' . $row["headline"] . '</h5>';
        echo '</div>';
        echo '<div class="c-item-overlay-text">'; // Add overlay to blur background and hide text
        echo '<a href=news-content.php?newsid=' . $row['content_id'] . '><span class="read-more">Read More</span></a>'; // Add "Read More" button
        echo '</div>';
        echo '</div>';
        echo '</a>';
      }
      ?>
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

  <div class="line"></div>



  <!--OUR PROGRAMS -->
  <div class="programs-text">
    <h1>OUR PROGRAMS</h1>
  </div>

  <div class="programs-container">
    <div class="row gy-3">
      <div class="col-md-4 n-item">

      <a href="programs-content.php?progid=40">
        <div class="programs-card">
          <img src="home-headline-image/eskwelanihan.png" class="card-img-top" alt="...">
          <div class="programs-card-body">
            <h5 class="programs-card-title">Eskwelanihan</h5>
          </div>
        </div>
      </a>

      </div>

      <div class="col-md-4 n-item">

        <a href="programs-content.php?progid=41">
          <div class="programs-card">
            <img src="home-headline-image/ugat.png" class="card-img-top" alt="...">
            <div class="programs-card-body">
              <h5 class="programs-card-title">UGAT</h5>
            </div>
          </div>
        </a>

      </div>

      <div class="col-md-4 n-item">
        <a href="programs-content.php?progid=42">
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

      <a href="programs-content.php?progid=43">
        <div class="programs-card">
          <img src="home-headline-image/farm-visit.png" class="card-img-top" alt="...">
          <div class="programs-card-body">
            <h5 class="programs-card-title">Farm Visitation</h5>
          </div>
        </div>
      </a>

      </div>

      <div class="col-md-4 n-item">

        <a href="programs-content.php?progid=44">
          <div class="programs-card">
            <img src="home-headline-image/tech-cons.png" class="card-img-top" alt="...">
            <div class="programs-card-body">
              <h5 class="programs-card-title">Technical Consultation</h5>
            </div>
          </div>
        </a>

      </div>

      <div class="col-md-4 n-item">
        <a href="programs-content.php?progid=45">
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

  <div class="line"></div>



  <!-- NEWS AND EVENTS-->
<div class="news-text">
  <h1>NEWS AND EVENTS</h1>
</div>

<div class="news-container">
  <div class="row gy-3">

  <?php
$ret=mysqli_query($conn,"SELECT * FROM contents WHERE category_id = 2 ORDER BY date_posted DESC, content_ID DESC");
if (!$ret) {
    die("Error executing query: " . mysqli_error($conn));
}
$ctr=1;
while ($row=mysqli_fetch_array($ret) ) {
  if ($ctr<=3){

?>  
    <div class="col-md-4 n-item">
    <?php 
if($row['category_id'] == 2){
  echo '<a href="news-content.php?newsid='.$row['content_id'].'">';
}
?>

      <div class="card">
        <img src="<?php echo $row['img']?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title"><?php  echo $row['title'];?></h4>
          <p class="card-text"><?php  echo $row['headline'];?></p>
        </div>
      </div>
    </a>
    </div>

<?php 

  }
  
$ctr++;
}?>


  </div>



</div>


  <div class="programs-button">
    <a href="news-headline.php">
      <input type="submit" value="LEARN MORE"/>
     </a>
  </div>


  <?php
  // Close the MySQL database connection
  mysqli_close($conn);
  ?>

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
