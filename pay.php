<?php
session_start();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="animate.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
<style>

body {
  background-image: url("NN-LOGO.png");
  background-position: 50% 50%;
  background-repeat: repeat;
   background-color: rgba(255,255,255,0.6);
  background-blend-mode: lighten;
}
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
h1 {
	font-family: 'Bad Script';
}

</style>
</head>

<body>
<h1 text align="center">Payment Page</h1>
<form action="pay.php" method="post" enctype="multipart/form-data">
 
 <label for="name">Name on card</label>
 <input type="text" placeholder="Enter name" name="name" id="name" required>
<label for="cardnumber">Card Number</label> 
 <input type="text" placeholder="1111-2222-3333-4444" name="cardnumber" id="cardnumber" required>
<label for="month">Expiry Month</label>  
  <input type="text" placeholder="July" name="month" id="month" required>
<label for="year">Expiry Year</label>  
  <input type="text" placeholder="2020" name="year" id="year" required>
<label for="cvv">CVV</label> 
  <input type="text" placeholder="123" name="cvv" id="cvv">
  <input type="submit" name="s1">
  
<?php				
			$con=mysqli_connect("127.0.0.1","root","","projdb");
	if(!empty($_POST['s1']))
			{   $emailid1=$_SESSION['email'];
		/*$i="insert into orders(email,image,itemname,itemid,price,qty,subt) select email,image,itemname,itemid,,price,qty,sub from temporder where email = '$emailid1'";
		*/
        $i="select * from orders";
		$rs1=mysqli_query($con,$i);
		if ($rs1)
		{
			echo "abc inside1";
			echo $emailid1;
		/*	$i="insert into orders(orderid,email,image,itemid,itemname,price,qty,sub) select 1,email,image,itemid,itemname,price,qty,sub from temporder where email = '$emailid1'";
			$rs1=mysqli_query($con,$i);*/
			$i="insert into orders(email,image,itemid,itemname,price,qty,sub) select email,image,itemid,itemname,price,qty,sub from temporder where email = '$emailid1'";
			$rs1=mysqli_query($con,$i);
  		}
		else
		{
			echo "abc inside2";
			$i="insert into orders(orderid,email,image,itemname,itemid,price,qty,subt) select 1,email,image,itemname,itemid,price,qty,sub from temporder where email = '$emailid1'";
            $rs1=mysqli_queheader("Location:orderpage.php");ry($con,$i);			
		}			
		
		$d="delete from temporder where email = '$emailid1'";
				$con=mysqli_connect("127.0.0.1","root","","projdb"); 
				/**/
		if($con)
		{
				echo "abc inside";
			/*mysqli_query($con,$i);*/
			mysqli_query($con,$d);
					header("Location:orderpage.php");	

		}
	
			}

$emailid1=$_SESSION['email'];

$a="select * from users where email='$emailid1'";
$con1=mysqli_connect("127.0.0.1","root","","projdb"); 
if($con1)
{  $rs1=mysqli_query($con1,$a);
   while($fra=mysqli_fetch_array($rs1))
   {
	$add1=$fra[4];
	$add2=$fra[5];
	$add3=$fra[6];
	$cit=$fra[7];
	$mob=$fra[8];
	$pho=$fra[9];

?>

<h1>Billing Address</h1>
                <label for="address">Address 1:</label>
                <input type="text" value="<?php echo $add1; ?>">
				<label for="city">City </label>
                <input type="text" value="<?php echo $cit; ?>">
				<label for="mobile">Mobile Number </label>
                <input type="text" value="<?php echo $mob; ?>">
                <label for="phone">Phone Number </label>
                <input type="text" value="<?php echo $pho; ?>">
              
</form>
			<?php
 }
}
?>

 <!--?php
					
	if(!empty($_POST['p1']))
			{   $emailid1=$_SESSION['email'];
				
	            $i="insert into orders(email,itemid,price,qty,sub) select email , itemid,price,qty, subtotal from temporder where email = '$emailid1'";
				$d="delete from temporder where email = '$emailid1'";
				$con=mysqli_connect("127.0.0.1","root","","projdb"); 
		if($con)
		{
			mysqli_query($con,$i);
			mysqli_query($con,$d);
				header("Location:order.php");		

		}
	
			}
?-->
</body>
</html>