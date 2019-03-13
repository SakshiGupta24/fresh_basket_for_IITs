<?php
session_start(); 
$_SESSION["flag"]="";
?>
<!DOCTYPE html>
<html>
<head>
<title>Fresh Basket for IITs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
<link rel="stylesheet" href="animate.css">

<style>
body {
  margin: 0;
  font-family: 'Bad Script';
  font-size: 25px;
}
.mySlides {
	display: none;
}
img {vertical-align: middle;
}

.topnav {
  overflow: hidden;
  background-color: #2eb82e;
  }

.topnav a {
  float: left;
  display: block;
  color: #051405;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
  font-family: 'Bad Script';
}

.active {
  background-color: #248f24;
  color: white;
}

.topnav .icon {
  display: block;
  float: left;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 25px;    
    border: none;
    outline: none;
    color: #051405;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
font-family: 'Bad Script';
	}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #47d147;
  color: black;
}

.dropdown-content a:hover {
    background-color: #47d147;
	color: #051405;
}

.dropdown:hover .dropdown-content {
    display: block;
	
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

.parallax {
 background-image: url("logo1.jpg");
 min-height: 500px;
 background-attachment: fixed;
 background-position: center;
 background-repeat: no-repeat;
 background-size: 100% auto;
 padding-top: 100px;
 }
.abt {
	background-color: #85e085;
}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  max-height: 400px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #248f24;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


</style>
</head>
<body>
<div class="container-fluid">
<div class="topnav" id="myTopnav">
  
<a class="navbar-brand" href="home1.php">
            <img src="logo1.jpg" alt="logo" style="width: 80px;"></a> 
  <a href="home.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Shop by Category 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="new_menuv.php">Vegetables</a>
    <a href="menu_fruits.php">Fruits</a>
    <a href="menu_cereals.php">Cereals</a>
	<a href="menu_pulses.php">Pulses</a>
	<a href="menu_spices.php">Spices</a>
	<a href="menu_international.php">International Foods</a>
    </div>
  </div> 
   <a href="contact.php">Contact Us</a>
   
   <!--a href="cart.php">
          <span class="glyphicon glyphicon-shopping-cart"></span>
        </a--> 
		<!--a class="fa fa-cart-arrow-down fa-2x btn-success" id="crt" href="cart.php"> Cart</a-->
       	<a href="cart.php"><i class="fa fa-shopping-cart" style="font-size:48px;color:black"></i></a>
  <a href="users.php">Sign Up</a>
  <a href="login.php">Log in</a>
  <a href="logout.php">Logout</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<div class="parallax"></div>

<div class="row">
  <div class="col-xs-1">
    <h2><p align="center"> DELIVERED FRESH AND GREEN </P></h2>
    <h3><p align="center"> ABOUT US </P></h3>
  </div>
  </div>
  
  <div class="row">
  <div class="col-xs-1">
  <div class="abt">
  <h4><p align="center">Who We Are </p></h4>
 <p align="center">Fresh Basket is a locally owned fresh goods and produce company which has branches in all the <strong>IITs</strong>. We care about what you put into your body.<br> We do the hard work and comb
 the country for growers with wholesome, healthy growing methods, hygienic practices and where possible, strictly organic goodies. </p>
  <h3><p align="center">Vision </P></h3>
  <p align="center"> Our goal is to provide individuals and families with the most informative, easy and friendly means to access fresh and natural products 
  with convenience.</p>
  <h3><p align="center"> Our Mission </P></h3>
 <p align="center"> “To help individuals and families, to easily explore, learn about and purchase natural and fresh products for the best health”.
  We ensure the produce are of high quality and are affordable.</p>
  </div>
  </div>
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="NN-LOGO.png" style="width:100%" class="responsive">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image2.jpg" style="width:100%" class="responsive">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image3.jpg" style="width:100%" class="responsive">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>
