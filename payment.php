<?php
		session_start();
					
					
	if(!empty($_POST['s2']))
			{   $emailid=$_SESSION['email'];
				
	$i="insert into orders(email,image,itemname,itemid,price,qty,sub) values('$emailid','$image','$name','$ite','$rate','$qua','$sub1')";
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
<title> Payment Page </title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
<style>

body {
  background-image: url("NN-LOGO.png");
  background-position: 50% 50%;
  background-repeat: repeat;
   background-color: rgba(255,255,255,0.6);
  background-blend-mode: lighten;
}
h1 {
	font-family: 'Bad Script';
}

.paymentWrap {
	padding: 50px;
}

.paymentWrap .paymentBtnGroup {
	max-width: 800px;
	margin: auto;
}

.paymentWrap .paymentBtnGroup .paymentMethod {
	padding: 40px;
	box-shadow: none;
	position: relative;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active {
	outline: none !important;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active .method {
	border-color: #4cd264;
	outline: none !important;
	box-shadow: 0px 3px 22px 0px #7b7b7b;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method {
	position: absolute;
	right: 3px;
	top: 3px;
	bottom: 3px;
	left: 3px;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	border: 2px solid transparent;
	transition: all 0.5s;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.master-card {
	background-image: url("images/data/mastercard.png");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.credit-card {
	background-image: url("images/data/credit.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.debit-card {
	background-image: url("images/data/debit.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.cash {
	background-image: url("images/data/cod.jpg");
}


.paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
	border-color: #4cd264;
	outline: none !important;
}
</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="paymentCont">
						<div class="headingWrap">
								<h1 class="headingTop text-center"><strong>Select Your Payment Method</strong></h1>	
						</div>
						<form action="payment.php" method="post">
						<div class="paymentWrap">
							<div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
					            <label class="btn paymentMethod">
					            	<div class="method master-card"></div>
					                <input type="submit" name="opt"> </input>
					            </label>
					            <label class="btn paymentMethod">
					            	<div class="method credit-card"></div>
					                <input type="submit" name="opt"> </input>
					            </label>
					            <label class="btn paymentMethod">
				            		<div class="method debit-card"></div>
					                <input type="submit" name="opt"></input>
					            </label>
					             <label class="btn paymentMethod active">
				            		<div class="method cash"></div>
					                <input type="submit" name="opt1"> </input>
					            </label>
					         
					        </div>        
						</div>
						</form>
						<div class="footerNavWrap clearfix">
							<div class="btn btn-success pull-left btn-fyi"><span class="glyphicon glyphicon-chevron-left"></span><a href="home.php"> CONTINUE SHOPPING</a></div>
							<div class="btn btn-success pull-right btn-fyi"><a href="order.php">
							<input class="btn btn-success btn-block fadeInUp"  type="submit" name="s2" value="CONFIRM ORDER"></a><span class="glyphicon glyphicon-chevron-right"></span></div>
						</div>
					</div>
					
<?php
if(!empty($_POST['opt']))
					{ header("Location:pay.php");
					}
if(!empty($_POST['opt1']))
					{ header("Location:pay1.php");
					}
?>
</body>
</html>					