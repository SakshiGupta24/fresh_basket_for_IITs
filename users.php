<!DOCTYPE HTML>
<html>
<head>
<title> Enter Your Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
<style>
form {
	padding-right: 150px;
	padding-left: 150px;
}
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
</style>
</head>
<body>
<?php
   if(!empty($_POST['s1']))
   {
     $pho=$_FILES['photo']['name'];
	 $user=$_POST['username'];
     $ema=$_POST['email'];
	 $pwd=$_POST['password'];	 
	 $add1=$_POST['address1'];
	 $add2=$_POST['address2'];
	 $add3=$_POST['address3'];
	 $cit=$_POST['city'];
	 $mob=$_POST['mobile'];
	 $phon=$_POST['phone'];
	 $s="insert into users(photo,username,email,password,address1,address2,address3,city,mobile,phone)values('$pho','$user','$ema','$pwd','$add1','$add2','$add3','$cit','$mob','$phon')";
	 $con=mysqli_connect("127.0.0.1","root","","projdb");
	 if($con)
	 {
	   mysqli_query($con,$s);
	   move_uploaded_file($_FILES['photo']['tmp_name'],"images/data/".$pho);
	   header("Location:login.php");
	 }
   }
 ?>

<h1 text align="center">Enter Your Details</h1>
<form action="users.php" method="post" enctype="multipart/form-data">
 
 <input type="file" name="photo" required>
 <br>
<label for="username">Name</label>
 <input type="text" placeholder="Enter your name" name="username" id="username" required>
<label for="email">Email</label> 
 <input type="text" placeholder="Enter user email id" name="email" id="email" required>
<label for="password">Enter password</label>  
  <input type="password" placeholder="Enter password" name="password" id="password" required>
  <br>
<label for="address1">Address 1</label>  
  <input type="text" placeholder="Enter address1" name="address1" id="address1" required>
<label for="address2">Address 2</label> 
  <input type="text" placeholder="Enter address2" name="address2" id="address2">
<label for="address3">Address 3</label>  
 <input type="text" placeholder="Enter address3" name="address3" id="address3">
<label for="city">City,State</label>  
  <select id="city" name="city" placeholder="Select City" required>
    <option value="Bhilai,Chhattisgarh">Bhilai,Chhattisgarh </option>
    <option value="Bhubaneswar,Odisha">Bhubaneswar,Odisha</option>	
	<option value="Bombay,Maharashtra">Bombay,Maharashtra </option>
	<option value="Delhi,Delhi">Delhi,Delhi </option>
	<option value="Dhanbad,Jharkhand">Dhanbad,Jharkhand </option>
	<option value="Dharwad,Karnataka">Dharwad,Karnataka </option>
	<option value="Gandhinagar,Gujarat">Gandhinagar,Gujarat </option>
	<option value="Goa,Goa">Goa,Goa </option>
	<option value="Guwahati,Assam">Guwahati,Assam </option>
	<option value="Hyderabad,Telangana">Hyderabad,Telangana </option>
	<option value="Indore,Madhya Pradesh">Indore,Madhya Pradesh </option>
	<option value="Jammu,Jammu & Kashmir">Jammu,Jammu & Kashmir </option>
	<option value="Jodhpur,Rajasthan">Jodhpur,Rajasthan </option>
	<option value="Kanpur,Uttar Pradesh">Kanpur,Uttar Pradesh </option>
    <option value="Kharagpur,West Bengal">Kharagpur,West Bengal</option>		
	<option value="Madras,Tamil Nadu">Madras,Tamil Nadu </option>	
	<option value="Mandi,Himachal Pradesh">Mandi,Himachal Pradesh </option>
	<option value="Palakkad,Kerala">Palakkad,Kerala </option>
	<option value="Patna,Bihar">Patna,Bihar </option>
	<option value="Roorkee,Uttarakhand">Roorkee,Uttarakhand </option>
	<option value="Ropar,Punjab">Ropar,Punjab </option>	
	<option value="Tirupati,Andhra Pradesh">Tirupati,Andhra Pradesh </option>
	<option value="Varanasi (BHU),Uttar Pradesh">Varanasi (BHU),Uttar Pradesh </option>
  </select>
<label for="mobile">Mobile Number</label>  
  <input type="text" placeholder="Enter mobile number" name="mobile" id="mobile" required>
<label for="phone">Phone Number</label>  
  <input type="text" placeholder="Enter phone number" name="phone" id="phone">  
  <input type="submit" name="s1">
</form>  
</body>
</html>
