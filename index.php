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

 </head>

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
		  font-size: 15px;
		  padding: 20px;
		  width: 200px;
		  margin: 4px 10px;}

.button1:hover {
  background-color: #555555;
  color: white;}

  
h2{
color: #033296; }

  
</style>

 <body>

    <header>
        <a href="#" class="logo"><img src="navbar-image/logo.png"></a>

        <input type="checkbox" id="menu-bar">
        <label for="menu-bar">MENU</label>

        <nav class="navbar">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">PROGRAMS</a></li>
                <li><a href="#">NEWS & EVENTS +</a>
                    <ul>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">EVENTS</a></li>
                    </ul>
                </li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">ACCOUNT</a></li>
            </ul>
        </nav>
    </header>


  <br><br>

  <div style="text-align:center">
	<a href="All Post.php" class="button button1"><b>ALL POSTS</b></a>
	<a href="" class="button button1"><b>PROGRAMS</b></a>
	<a href="All News.php" class="button button1"><b>NEWS</b></a>
	<a href="" class="button button1"><b>EVENTS</b></a>
	<a href="" class="button button1"><b>TESITIMONIES</b></a>
 </div>


 <br><br>
 <br><br>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-col">
                    <img src="footer-image/taytay-logo.png">
                    <h4>BROWSE</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">News & Events</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-col1">
                    <img src="footer-image/taytay-logo.png">
                    <img src="footer-image/smile-logo.png">
                    <h4>CONTACT US</h4>
                    <ul>
                        <div class="loc">
                            <li><a href="#">Likod ng Bagong Palengke, Market Road, Sitio Batong Dalig, Barangay San Juan, Taytay, Philippines, 1920</a></li>
                        </div>
                        <div class="mail">
                            <li><a href="mailto:email@gmail.com">agriculture@taytayrizal.gov.ph</a></li>       
                        </div>
                        <div class="fb">
                            <li><a href="https://www.facebook.com/TaytayAgriculture" target="_blank">facebook.com/TaytayAgriculture</a></li>
                        </div>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
 </body>
</html>

