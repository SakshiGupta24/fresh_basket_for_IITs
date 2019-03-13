<?php

session_start();

$emailid1=$_SESSION['email'];

	$s="select * from items where category='2'";
		$con=mysqli_connect("127.0.0.1","root","","projdb"); 
		if($con)
		{
			$rs=mysqli_query($con,$s);
			
			while($fr=mysqli_fetch_array($rs))
			{
				echo $emailid1;
				$a=$fr[0];
				$b=$fr[1];
				$c=$fr[2];
				$d=$fr[3];
				$e=$fr[4];
				$f=$fr[5];
				$g=$fr[6];

	
				?>

<html>
<head>
<title>Buy vegetables</title>

</head>
<body>
<div class="container-fluid">
				<div class="row animated rubberBand" style="margin-top: 60px;">
				<div class="col-sm-4" style="margin-top: 40px;">
				
				<div class="row">
				<div class="col-sm-12 fadeInUp">
				<?php echo $b; ?>
				</div>	
				</div>
				
				<div class="row">
				<div class="col-sm-3">
				<img src="images/data/<?php echo $c; ?>">
				</div>	
				</div>
				
				<div class="row">
				<div class="col-sm-3">
				<?php echo $d; ?>
				<?php echo 'per'; ?>
				<?php echo $e; ?>
				
				</div>	
				</div>
				<div class="row">
				<div class="col-sm-3">
						<form action="menu_vegetables.php" method="post">
				<select class="form-control fadeInUp" id="quant" name="qt">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
							</select>
				
					<button class="add-to-cart">
						<em>Add to Cart</em>
						<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
							<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
						</svg>
						</button>
					<!--input class="btn btn-success btn-block fadeInUp"  type="submit" name="s2"  value="ADD TO CART"-->
				</form>
				</div>
				</div>
				
</div>
</div>
</div>
<?php    
			}
		}
	?>
	<!--
<php	
session
if(!empty($_POST['s2']))
{
	echo  'this is inside loop' ;
	echo $emailid1;
	/*
	$itid=$a;
	$qty1=$_POST['qt'];
	
	echo $itid;
	echo $qty1;
	$i="insert into temporder(email,itemid,qty) values('$emailid1','$itid','$qty1');" */
}

		?
		
		--> 
</body>
</html>