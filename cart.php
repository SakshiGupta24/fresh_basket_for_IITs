<?php
session_start();
?>

<!doctype html>
<html>
<head>
<title> Cart </title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
<style>
h1 {
	font-family: 'Bad Script';
}
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
	
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}
	
	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}
	
	
	
	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}
	
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
$_SESSION["flag"]="cart";
require("topnavbar.php");
if(isset($_SESSION['SESS_CHANGEID']) == TRUE) {
session_unset();
session_regenerate_id();
echo 'abc';
}
require("config.php");

if(isset($_SESSION['loggedin']) == FALSE) 
{   
/*header("Location:login_signup.php");*/
echo "<br><br><br><br><br><br>YOU HAVE NOT LOGGED IN.<br><br><br>";
echo "Existing user? First ";
echo '<a href="login.php">Login</a>';
echo "<br><br><br>New to this site?  ";
echo '<a href="users.php">Sign Up</a>';
/*[<a href="/*&quot; . $config_basedir. &quot; logout.php">logout</a>]"; */

}

else{
$emailid1=$_SESSION['email'];
if(!empty($_POST['s3']))
			{  
		        $image=$_GET['img'];
				$name=$_GET['nam'];
				$ite=$_GET['it'];
				$rate=$_GET['rate'];
				echo 'name';
				 $d="DELETE FROM temporder where itemname='$name' and email='$emailid1'";
				$con=mysqli_connect("127.0.0.1","root","","projdb"); 
		if($con)
		{
			mysqli_query($con,$d);
						

		}
	
			}

$s="select * from temporder where email='$emailid1'";
		$con=mysqli_connect("127.0.0.1","root","","projdb"); 
		if($con)
		{
			$rs=mysqli_query($con,$s);
			$tot=0;
			while($fr=mysqli_fetch_array($rs))
			{
				$a=$fr[0];
				$b=$fr[1];
				$c=$fr[2];
				$d=$fr[3];
				$e=$fr[4];
				$f=$fr[5];
				$g=$fr[6];
	            $tot=$tot+$g;
				
?>

<h1 text align="center"><strong>Cart</strong></h1>
<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="images/data/<?php echo $b; ?>" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h2 class="nomargin"><?php echo $c; ?></h2>
									</div>
								</div>
							</td>
							<td data-th="Price"><strong><?php echo $e; ?></strong></td>
							<td data-th="Quantity">
								<h2 class="nomargin"><strong><?php echo $f; ?></strong></h2>
							</td>
							<td data-th="Subtotal" class="text-center"><strong><?php echo $g ?></strong></td>
							<td class="actions" data-th="">
							<form action="<?php echo "cart.php?it=$d&rate=$e&img=$b&nam=$c";  ?>" method="post">
							<!-- button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button-->		
                             <input class="btn btn-danger btn-sm" type="submit" name="s3" value="Delete"></input>							
							</form>
							</td>
						</tr>
					</tbody>
					
			<?php 
			}
		}
		?>
		<tfoot>
						<tr>
							<td><a href="home.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong><?php echo $tot; ?></strong></td>
							<td><a href="payment.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                <!--input type="submit" name="checkout" value="Checkout" class="btn btn-success btn-block"><i class="fa fa-angle-right"></i>	</input-->		
			</tr>
					</tfoot>
				</table>
</div>

<?php
}
?>
</body>
</html>