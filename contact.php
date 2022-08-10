﻿<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";

$result="";

if(isset($_POST['submit'])){
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='career@theuxgurus.com';
$mail->Password='12345';

$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('career@theuxgurus.com');
$mail->addReplyTo($_POST['email'],$_POST['name']);

$mail->isHTML(true);
$mail->Subject='UXGURUS Website Message: '.$_POST['name'];
$mail->Body='<p align=left>Name: '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Phone no: '.$_POST['Phoneno'].'<br>Message: '.$_POST['message'].'</p>';

if(!$mail->send()){
$result="something went wrong. please try again.";
}
else{
$result="Thanks ".$_POST['name']."  for contacting us! We will be in touch with you shortly.";
echo "<meta http-equiv=\"refresh\" content=\"5;URL=\">";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bellefair&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
<!-- reset css -->
<link rel="stylesheet" href="./assets/css/reset.css">
<!-- styles -->
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/responsive.css">
<title>CONTACT</title>
</head>
<body>
<!-- header section starts here-->
  <div class="header">
    <h1 class="header__logoH1">
      <a class="header__logo" title="UXGURUS" href="index.html">
      </a>
    </h1>
       <div id="menuToggle">
              <input type="checkbox" />
                  <span></span>
                  <span></span>
                  <span></span>
             </div>
      <div class="header__navbar" >
          <ul class="header__navbarli"  id="header_navbarli">
            <li> <a class="header__navbarlist" href="about.html" title="About Us">About Us</a></li>
            <li> <a class="header__navbarlist" href="services.html" title="Services">Services</a></li>
            <li> <a class="header__navbarlist" href="process.html" title="Our Process">Our Process</a></li>
            <li> <a class="header__navbarlist"  href="whyus.html" title="Why Us?">Why Us?</a></li>
            <li> <a class="header__navbarlist" href="careers.html" title="Careers">Careers</a></li>
            <li> <a class="header__navbarlist active"  href="contact.php" title="Contact Us">Contact Us</a></li>
          </ul>
      </div>
  </div>
  <!-- header section ends here-->
   <!-- banner starts from here -->
  <div class="contactbanner">
  <img src="./assets/images/contactbanner.jpg" class="contactbanner__img" alt="contactbanner"/>
</div>
<!-- banner ends from here -->
   <!-- contactus section starts here-->
   <div class="clear"></div>
   <div class="contact">
      <div class="contact__main">
          <h1 class="contact__heading">We'd Love to Hear from You!</h1>
          <form action="" method="post" id="form-box" >
          <input type="text" name="name" placeholder="Your Name" class="contact__input" id="name" required>
          <input type="email" name="email" placeholder="Your Email" class="contact__input" id="email" required>
          <input type="text" maxlength="10" name="Phoneno" placeholder="Your Phone " class="contact__input" id="phoneno"
        required onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 &amp;&amp; event.charCode <= 57" >
          <input type="text" name="message" placeholder="message" class="contact__input" id="message" required><br>
            <!-- <p class='contact__errMsg' id="errname" style="display:none;">Please enter the name</p> 
            <p class='contact__errMsg' id="erremail" style="display:none;">Please enter the email</p> 
            <p class='contact__errMsg' id="errphoneno" style="display:none;">Please enter the phone no</p> 
            <p class='contact__errMsg' id="errmsg" style="display:none;">Please enter the message</p> -->
           <p class='contact__sucessmsg' id="success"  ><?= $result; ?></p>
          <button class="contact__button"name="submit" id="submit"  onclick="Submit()">Send</button>
      </form>
      </div>
     </div>
    <div class="map">
      <iframe  width="100%" height="400px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15548.814477179556!2d77.6582454!3d13.0227016!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8729ffdefb7159ac!2sUXGURUS+Consultancy!5e0!3m2!1sen!2sin!4v1552556279246"   style="border:0" allowfullscreen></iframe>
    </div>
   <!-- contactus section enda here-->
<!-- footer section starts here-->
  <div class="footer">
    <div class="footer__content"> 
      <div class="footer__leftDiv">
        <a href="#"><img src="./assets/images/footerimg.png" class=" footer__logo" alt="logo">  </a>
      </div> 
        <div class="footer__rightDiv">
          <div class="footer__quicklinks myClass">
            <h6 class="footer__quicklinksheader">Quick Links </h6>
              <ul>
              <li><a href="about.html" class="footer__menu">About Us</a></li>
              <li><a href="services.html" class="footer__menu">Services</a></li>
              <li><a href="process.html" class="footer__menu">Our Process</a></li>
              <li><a href="whyus.html" class="footer__menu">Why Us?</a></li>
              <li><a href="careers.html" class="footer__menu">Careers</a></li>
              <li><a href="contact.php" class="footer__menu">Contact Us</a></li>
              </ul>
          </div>
            <div class="footer__register myClass">
              <h5 class="footer__registerheader">Registered Office </h5>
                <p class="footer__regaddress">
                  304 Elegant Supreme  <br>
                  304/2 Horamavu Main Rd,  <br>
                  Banaswadi <br>
                  Bengaluru 560043<br>
                  Karnataka, India </p>
            </div>
          <div class="footer__share myClass">
            <h5 class="footer__shareheader">For Career</h5>
              <p class="footer__shareaddress"><img src="./assets/images/envelope.png" class="envelope" alt="envelope"/> <a href="mailto:career@theuxgurus.com" class="footer__mail" title="careers">career@theuxgurus.com </a></p>
                <div class="footer__business">
                    <h5 class="footer__contactheader"> For business enquiries</h5>
                      <p class="footer__contdetails"><img src="./assets/images/envelope.png" class="envelope" alt="envelope"/> <a href="mailto:admin@theuxgurus.com" class="footer__mail" title="careers">admin@theuxgurus.com </a></p>
                      <p class="footer__contdetails"><img src="./assets/images/call.png" class="call" alt="call"/> <a class="footer__mail" href="tel:01234567890">+91 8431824834</a></p>
                </div>
          </div>
            <div class="footer__contact myClass">
              <h5 class="footer__followheader"> Follow On</h5>
                <div class="footer__social-networks">
                  <a href="https://www.facebook.com/UxgurusConsultancy" target="_blank" class="footer-icon"><img src="./assets/images/facebook-logo.png" class="facebook" alt="fb"></a>
                  <a href="https://twitter.com/UXG_Consultancy" target="_blank" class="footer-icon"><img src="./assets/images/twitter-logo.png" class="twitter-logo" alt="twitter-logo"></a>
                  <a href="https://www.linkedin.com/in/uxgurus/" target="_blank" class="footer-icon"><img src="./assets/images/linkedin-logo.png" class="linkedin" alt="linkedin-logo"></a>
                  <a href="https://www.instagram.com/your_uxgurus/" target="_blank" class="footer-icon"><img src="./assets/images/instagram.png" class="instagram" alt="instagram-logo"></a>     
            </div>  
        </div>
      </div>
    </div>
      <hr >
        <p class="footer__copyright">© Copyright 2019 UXGURUS</p>
  </div>
<!-- footer section ends here-->

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="./js/main.js"></script> 
<script src="./js/resCarousel.js"></script>
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '5ea1c4e0-7329-4219-9b41-8ebe7a8c88d1', f: true }); done = true; } }; })();</script>

  </body>
  </html>