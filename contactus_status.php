<?php
$servername = "localhost:3306";
$username = "root";
$password = "helloworld";
$dbname = "tex19";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['mobile'];
$message = $_POST['message'];
// echo $name."<br>".$email."<br>".$phone."<br>".$message;
$query = "INSERT INTO `contact_us_submissions`( `name`, `phone`, `email`, `message`) VALUES ('$name', '$phone', '$email', '$message')";
$result = mysqli_query($conn, $query);
$message = "";
if ($result) {
  $message = $message . "Hey " . $name. ", thanks for connecting with us.";
  $message = $message . "<br><br>We will get back to you shortly.";
} else {
    $message = "Sorry, Something went wrong please try again!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Texephyr'19</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/tx.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <style>
    .google-maps {
          position: relative;
          padding-bottom: 75%; // This is the aspect ratio
          height: 0;
          overflow: hidden;
      }
      .google-maps iframe {
          position: absolute;
          top: 0;
          left: 0;
          width: 100% !important;
          height: 100% !important;
      }
  </style>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="index.html#intro" class="scrollto"><img src="img/tx.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="events.html">Events</a></li>
          <li><a href="schedule.html">Schedule</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="team.html">Team</a></li>
          <li><a href="sponsors.html">Sponsors</a></li>
          <li class="menu-active"><a href="contactus.html">Contact</a></li>
          <li class="buy-tickets"><a href="register.php">Registrations</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main" class="main-page">

    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>Message</h2>
        </div>

        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-8">

            <div class="card bg-info text-white">
              <div class="card-body"><p><?php echo $message ?></p></div>
            </div>

          </div>
          <div class="col-md-2">
          </div>
        </div>
      </div>
    </section>
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <div class="ayra">
              <img src="img/tx.png" alt="" title="">Texephyr'19</div>
            <p>Texephyr is MIT-WPU's National Level Technical Fest.This event has been inspiring the minds of young students, igniting them to conquer the challenges faced today and propose innovating solutions that will flow a fresh wind of change
              for development of society as well as themselves.</p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="index.html">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="about.html">About Us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="events.html">Events</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="sponsors.html">Sponsors</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="register.php">Registration</a></li>

            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              MIT-World Peace University <br>
            S.No.124, Paud Road, Kothrud, Pune, <br>
            Maharashtra 411038 <br><br>
              <strong>Email:</strong> texephyr.mitpune@gmail.com<br> <strong>Mobile:</strong> 9168027990,  8669189933
            </p>

            <div class="social-links">
              <a href="https://twitter.com/mit_texephyr" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
              <a href="https://m.facebook.com/profile.php?id=1390080244578546&ref=content_filter" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a> <a href="https://www.instagram.com/mit_texephyr/" class="instagram" target="_blank"><i
                  class="fa fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCrw25HiTlNJBEo9fjZDVY7g" class="google-plus" target="_blank"><i class="fa fa-youtube-play"></i></a>

            </div>

          </div>

        </div>
      </div>
    </div>


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Texephyr</strong>. All Rights Reserved
         
           
      </div>
    </div>
  </footer><!-- #footer -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
