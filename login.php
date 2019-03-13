
<?php
session_start();
$_SESSION["flag"]="login";
	if(!empty($_POST['s1']))
	{
		$ema1=$_POST['email'];
				$pwd1=$_POST['password'];
  echo "inside1";
	$s="select * from users where email='$ema1' and password='$pwd1'";	
		$con=mysqli_connect("127.0.0.1","root","","projdb"); 
		if($con)
		{ echo "inside2";
			$rs=mysqli_query($con,$s);
			$fr=mysqli_fetch_row($rs);
			echo $fr[2];
			$ema=$fr[2];
			$pwd=$fr[3];
			if($ema1==$ema && $pwd1==$pwd)
			{$_SESSION['email']=$ema1;
		          $_SESSION['loggedin'] = true;
    /*$_SESSION['username'] = $username;*/
			/*$_SESSION['emid']=$ema;*/
	
			      if($_SESSION['flag']=='login')
				  { echo "You have logged in as"; echo $ema1;
				header("Location:home.php");
				  }
			
			      if($_SESSION['flag']=='cart')
				  {
				header("Location:cart.php");
				  }
				     if($_SESSION['flag']=='addtocartv')
				  {  header("Location:new_menuv.php");
				/*header("Location:account.php"); */
				  }
				   if($_SESSION['flag']=='addtocartf')
				  {
				header("Location:menu_fruits.php");
				  }
				  if($_SESSION['flag']=='addtocartc')
				  {
				header("Location:menu_cereals.php");
				  }
				  if($_SESSION['flag']=='addtocarti')
				  {
				header("Location:menu_international.php");
				  }
				  if($_SESSION['flag']=='addtocartp')
				  {
				header("Location:menu_pulses.php");
				  }
				  if($_SESSION['flag']=='addtocarts')
				  {
				header("Location:menu_spices.php");
				  }
			}
		
			else{
				echo "<script>alert('user does not exist. signup first')</script>";
				header("Location:users.php");
			}
		
		}
	}
	?>




<!DOCTYPE HTML>
<html>
<head>
<title> Login Page </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
<style>

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px dotted green;
    border-radius: 4px;
    box-sizing: border-box;
	background-color: #ecf9ec;
font-family: 'Comfortaa', cursive;
}
input[type=text]:hover {
    border: 3px solid green;
}

h1 {
	font-family: 'Bad Script';
}
label {
	
font-family: 'Comfortaa', cursive;
}
input[type=submit] {
    width: 100%;
    background-color: #2d862d;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
font-family: 'Pacifico', cursive;
	}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
body {
  background-image: url("NN-LOGO.png");
  background-position: 50% 50%;
  background-repeat: repeat;
   background-color: rgba(255,255,255,0.6);
  background-blend-mode: lighten;
}
form {
	padding: 130px 150px;
}
</style>

</head>
<body>
<br>
<br>
<br>
<h1 text align="center">Login Page</h1>
<form action="login.php" method="post">
<label for="email">Email</label>
        <input type="text" name="email" placeholder="Enter Email id" id="email" required>
<label for="password">Password</label>		
        <input type="password" name="password" placeholder="Password" id="password" required>
        <input type="submit" value="Login" name="s1">
</form>
</body>
</html>