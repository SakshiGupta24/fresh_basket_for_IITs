<?php
	session_start();
	?>
<!DOCTYPE HTML>
<html>
<head>
<title> My Account</title>
</head>
<body>

<?php
	$emailid=$_SESSION['email'];
	echo $emailid;
	$s="select * from users where email='$emailid'";
		$con=mysqli_connect("127.0.0.1","root","","projdb"); 
		if($con)
		{
			$rs=mysqli_query($con,$s);
			
			while($fr=mysqli_fetch_array($rs))
			{
				$a=$fr[0];
				$b=$fr[1];
				$c=$fr[2];
				$d=$fr[3];
				$e=$fr[4];
	            $f=$fr[5];
	            $g=$fr[6];
	            $h=$fr[7];
	            $i=$fr[8];
	            $j=$fr[9];
	            
	
	 echo $a; 
	 echo $b; 	
	 echo $c; 
	 echo $d; 
	 echo $e; 
	 echo $f; 
	 echo $g;
     echo $h;
	 echo $i;
     echo $j;	 
			}
		}
		?>
<p>account</p>
<a href="home.php">Continue Shopping</a>
<a href="logout.php">Logout</a>
<a href="cart.php">Cart</a>
</body>
</html>