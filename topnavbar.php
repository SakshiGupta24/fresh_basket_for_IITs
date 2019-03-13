<!doctype html>
<html>
<head>
<title>Navigation bar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>

<style>
body {
  margin: 0;
  font-family: 'Bad Script';
  font-size: 25px;
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

.active {
  background-color: #248f24;
}

</style>
</head>
<body>
<div class="container-fluid">
<div class="topnav" id="myTopnav">
  
<a class="navbar-brand" href="home1.php">
            <img src="logo1.jpg" alt="logo" style="width: 80px;"></a> 
  <a href="home.php">Home</a>
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
</div>
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