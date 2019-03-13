<?php
		session_start();
		require("topnavbar1.php");				
	if(!empty($_POST['s2']))
			{   $_SESSION["flag"]="addtocarti";
		        require("Session.php"); 
         		$emailid=$_SESSION['email'];
				/*$user=$_SESSION['uid'];*/
				$image=$_GET['img'];
				$name=$_GET['nam'];
				$ite=$_GET['it'];
				$rate=$_GET['rate'];
                $qua=$_POST['qt'];
				$sub1=$rate*$qua;
				
	$i="insert into temporder(email,image,itemname,itemid,price,qty,sub) values('$emailid','$image','$name','$ite','$rate','$qua','$sub1')";
				/* $i="insert into menu_new (item,quantity,rate,total,userid,image)values('$ite','$qua','$rate','$total','$user','$image')" ; */
				$con=mysqli_connect("127.0.0.1","root","","projdb"); 
		if($con)
		{
			mysqli_query($con,$i);
						

		}
	
			}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Order International Foods Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/font-awesome.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Buda:300' rel='stylesheet'>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="animate.css">

<style>
	body {
  font-family: Arial, Helvetica, sans-serif;
}
	.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px 0 30px 0;
} 
	#img{
		margin-left: 100px;
	padding: inherit;
		
	}
	.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}
	.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
	width: 10%;
	margin-left: 140px;
}
	.h{
		background-color: aqua;
	}
	
	#drop{
		align-content: center;
		
}
	.h3{
		margin-left: 130px;
	}
	

	.im{
		margin-left: 170px;
		padding: 10px;
}
	#buton{
		margin-right: 50px;
	}
	
	#crt{
		margin-left: 1000px;
	}
	
	#nv{
		opacity: 0.8;
	}
	
	.abc{
      font-family: 'Bad Script';
}
	
	.hey2{
		padding: 2px;
		margin-left: 10px;
		height: 50px;
		width: 100px;
	}
	.hey3{
		padding: 2px;
		margin-left: 10px;
		height: 50px;
		width: 100px;
		margin-top: 7px;
	}
	</style>
</head>

<body>
		<br>
		<br>
			<div class="container-fluid">
				<div class="row animated rubberBand" style="margin-top: 60px;">
<?php
$s="select * from items where category='4'";
		$con=mysqli_connect("127.0.0.1","root","","projdb"); 
		if($con)
		{
			$rs=mysqli_query($con,$s);
			
			while($fr=mysqli_fetch_array($rs))
			{
				$a=$fr[0];   /*Itemid */
				$b=$fr[1];   /*itemname*/
				$c=$fr[2]; /*Image*/
				$d=$fr[3]; /* Price */
				$e=$fr[4]; /* unit */
				$f=$fr[5]; /* Category*/
				$g=$fr[6]; /* Stock */
				
				?>
				<div class="col-sm-4" style="margin-top: 40px;">
				<div class="row">
				
				<div class="col-sm-12">
					<img src="images/data/<?php echo $c ; ?>" style="height: 150px" class="img-thumbnail animated fadeInUp" name="img" />
				</div>	
				</div>
				<div class="row">
				<div class="col-sm-12 fadeInUp">
					<h4 class="abc"><?php echo $b; ?></h4>
				</div>	
				</div>
				<div class="row">
				<div class="col-sm-3">
					<h4 class="abc"><?php echo $d; echo ' per '; echo $e; ?></h4>
				<br>
					<h4 class="abc"><?php echo 'stock available: '; echo $g; ?></h4>
				</div>	
				<div class="col-sm-3">
						<form action="<?php echo "menu_international.php?it=$a&rate=$d&img=$c&nam=$b";  ?>" method="post">
				<select class="form-control fadeInUp" id="quant" name="qt">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
							</select>
				</div>
				</div>
				<div class="row" style="margin-top: 15px;">
				<div class="col-sm-1"></div>
				<div class="col-sm-4">
					<input class="btn btn-success btn-block fadeInUp"  type="submit" name="s2"  value="ADD TO CART">
				</form>
				</div>
				</div>
				</div>
				
				
	
			
				
				<?php
			}	
			
		}
	
	?>	
	  </div>
	</div>
	<a href="cart.php">cart</a>
</body>
</html>