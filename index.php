<?php
$msg = "";
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $iam = $_POST['iam'];
    $body = $_POST['message'];
try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'techpvec1@gmail.com';                  // SMTP username
    $mail->Password   = 'wqzlvttbvlikwuph';                     // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    
    $mail->setFrom($email, $name);                              //Recipients
    
    $mail->addAddress('sales@channelier.com');               
     
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your Bonolo website Contact Form:  '.$name;
    $mail->Body = '<h3 align=center>You have received a new message from your website contact form.</h3><br>Here are the details:<br><br>Name: '.$name.'<br><br>Email: '.$email.'<br><br>Contant number: '.$telephone.'<br><br>I am: '.$iam.'<br><br>Message: '.$body; 
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    $msg = 'Hey '.$name.' ! Your message has been successfully sent. We will contact you very soon!';

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    die();
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bonolo</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="img/favicon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/favicon.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/favicon.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
<script type="text/javascript" src="js/modernizr.custom.js"></script>
</head>

<body>
<!-- Preloader
    ================================================== -->
<div id="preloader">
  <div id="status"> <img src="img/preloader.gif" height="100" width="100" alt=""> </div>
</div>

<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html"><img src="img/arachnomesh_logo.png" class="img-responsive" alt="Glimray" style="height:78px; top:-30px; position:relative;"></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="nav_link"><a href="#home" class="page-scroll nav_link">Home</a></li>
        <li class="nav_link"><a href="#about-section" class="page-scroll nav_link">About</a></li>
        <li class="nav_link"><a href="#contact-section" class="page-scroll nav_link">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container --> 
</nav>

<!-- Header -->
<header class="text-center full_section" name="home">
  <div class="intro-text">
    <h1 class="wow fadeInDown come"><strong><span class="color">Coming Soon</span></strong></h1>
    <div id="clockdiv" class="page-scroll wow fadeInUp" data-wow-delay="200ms">
      <div>
        <span id="demo1"></span>
        <div class="smalltext">Days</div>
      </div>
      <div>
        <span id="demo2"></span>
        <div class="smalltext">Hours</div>
      </div>
      <div>
        <span id="demo3"></span>
        <div class="smalltext">Minutes</div>
      </div>
      <div>
        <span id="demo4"></span>
        <div class="smalltext">Seconds</div>
      </div>
    </div> 
  </div>
</header>

<!-- About Section -->
<section id="about-section" class="full_section">
  <div class="container-fluid aboutus">
    <div class="section-title text-center wow fadeInDown">
      
    <div class="col-xs-12">
      <div class="wow fadeInDown aboutcolor row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8 color1 toh">
            <h2><strong>About</strong> us</h2>
            <hr>
          <p class="h3 justified">Bonolo is going to change the way you look at procurement. Bringing ultimate transparency to purchasing, Bonolo bring vendors from all over the world to your doorstep. In the time you enjoy your cup of coffee, Bonolo will get you the best prices from these curated, verified vendors.</p>
          <div class="wow fadeInUp aboutcolor">
            <p class="special"> Get ready for amazing savings & a never felt before, peace of mind</p>     
          </div>
        </div>
        <div class="col-xs-2"></div>             
      </div>
      
    </div>
  </div>
</div>
</section>

<!-- Contact Section -->
<section id="contact-section" class="text-center full_section">
  <div class="container">
    <div class="wow fadeInDown">
      <h2><strong>Contact</strong> us</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="200ms">
      <div class="col-md-6 col-sm-6 col-xs-6"><i class="fa fa-envelope-o fa-2x"></i><br>
        <a href = "mailto: contact@bonolo.in">contact@bonolo.in</a>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6"><i class="fa fa-phone fa-2x"></i><br>
        <a href="tel:01146062261">Call 011-46062261/62/63</a>     
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="400ms">
    <h3>Leave us a message</h3>

    <form name="sentMessage" method='post' id="contactForm" novalidate>
      
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="required">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
            <p class="help-block text-danger"></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Phone Number" required="required">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <!-- <input type="email" id="email" class="form-control" placeholder="Email" > -->
            <select class="form-control" name="iam" id="iam" placeholder="I Am" required="required">
              <option [value]="pow">I Am</option>
              <option [value]="pow">Customer</option>
              <option [value]="pow">Supplier</option>
              <option [value]="pow">Media</option>
              <option [value]="pow">Investor</option>
              <option [value]="pow">Others</option>
            </select>
            <p class="help-block text-danger"></p>
          </div>
        </div>
      </div>

      <div class="form-group">
        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
        <p class="help-block text-danger"></p>
      </div>

      <div id="success"></div>
      <button type="submit" name="submit" class="btn btn-default">Send Message</button>
    </form>
    <?php echo $msg; ?>
    </div>
  </div>
</section>
<section id="footer">
  <div class="container">
    <p>Copyright © Bonolo. Design & Developed by <a href="http://www.Arachnomesh.com" target="blank" rel="nofollow">Arachnomesh</a></p>
  </div>
</section>

<!-- Portfolio Modals --> 
<!-- Use the modals below to showcase details about your portfolio projects! --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/wow.min.js"></script> 
<!-- <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>  -->
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.scrollify.min.js"></script>
<script>
    $(function() {
        $.scrollify({
            section : ".full_section",
            setHeights: false,
            overflowScroll: false,
            touchScroll:false,
            scrollSpeed: 2000,
        });
    });
</script>
<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
$(".nav_link").on("click",function(){
    $(".navbar-collapse").removeClass("in");
});  
</script>
</body>
</html>