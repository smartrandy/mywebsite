<!DOCTYPE html>
<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124257810-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124257810-1');
</script>


<title>Cyber World Technologies-Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css files/style.css">
<link rel="stylesheet" href="css files/Fonts.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/favicon.ico" />
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>

<body class="w3-black">
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center" style="width:8%">
  <!-- Avatar image in top left corner -->
  <a href="Home">
  <img src="images/Logo.png" style="width:100%">
  </a>
  <a href="Home" class="w3-bar-item w3-button w3-padding-small w3-hover-black">
    <i class="fa fa-home w3-large"></i>
    <p>HOME</p>
  </a>
  <a href="Services" class="w3-bar-item w3-button w3-padding-small w3-hover-black">
    <i class="fa fa-fw fa-wrench w3-large"></i>
    <p>SERVICES</p>
  </a>
  <a href="Contact" class="w3-bar-item w3-button w3-padding-small w3-black">
    <i class="fa fa-envelope w3-large"></i>
    <p>CONTACT</p>
  </a>
  <a href="About" class="w3-bar-item w3-button w3-padding-small w3-hover-black">
    <i class="fa fa-user w3-large"></i>
    <p>ABOUT</p>
  </a>
</nav>
<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="Home" class="w3-bar-item w3-button" style="width:15% !important">HOME</a>
    <a href="Services" class="w3-bar-item w3-button" style="width:15% !important">SERVICES</a>
    <a href="Contact" class="w3-bar-item w3-button" style="width:15% !important">CONTACT</a>
    <a href="About" class="w3-bar-item w3-button" style="width:15% !important">ABOUT</a>
  </div>
</div>

<div class="w3-padding-large" id="main">

 <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Kesavaram, Andhra Pradesh, India.</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +91 9490943968</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: contact@cyberworldtechnologies.in</p>
    </div><br>
    <p>Lets get in touch. Send me a message:</p>

    <form method="post" action="email.php" target="_self">
      <p><input class="w3-input w3-padding-16" type="text" name="pname" placeholder="Name" required name="Name" /></p>
      <p><input class="w3-input w3-padding-16" type="text" name="pemail" placeholder="Email" required name="Email" /></p>
      <p><input class="w3-input w3-padding-16" type="text" name="psubject" placeholder="Subject" required name="Subject" /></p>
      <p><input class="w3-input w3-padding-16" type="text" name="pmessage" placeholder="Message" required name="Message" /></p>
      <p>
        <input class="w3-button w3-light-grey w3-padding-large" name="submit" type="submit" value="SEND MESSAGE"></input>
      </p>
    </form>
    <h3><?php include "email.php"?></h3>
 </div>
  
  <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <a href="https://www.facebook.com/cyberworldtechnologies" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/cyberworldtechnologies/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://twitter.com/SriRamesh_Naidu" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/in/srirameshnaidu" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
    <p class="w3-medium w3-center">Copyright © 2018, Cyber World Technologies, All Rights Reserved. </a></p>
  <!-- End footer -->
  </footer>
  
  <!-- END PAGE CONTENT -->
</div>

</body>

</html>