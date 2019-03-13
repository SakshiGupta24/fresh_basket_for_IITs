<?php
session_start();

require("topnavbar.php");	
?>
<!doctype html>
<html>
<head>
<title>Order Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
<style>
body {
	background-image: url("NN-LOGO.png");
  background-position: 50% 50%;
  background-repeat: repeat;
   background-color: rgba(255,255,255,0.6);
  background-blend-mode: lighten;
}
table.tb2 {
	width: 100%;
	height: 100%;
	
}
table.tb2 th, td {
	
    padding: 15px;
    text-align: center;
	border: none;
}
table.tb2 tr:hover {
	background-color: #d1e0e0;
	}

table.tb1 {
		height: 10%;
		width: 100%;
		border: none;
		text-align: center;
		font-size: 23px;
}

</style>
</head>
<body>

<h1 TEXT ALIGN="CENTER">YOUR ORDERS</H1>
	
<table class="tb1">
<col width="10">
	<col width="10">
	<col width="10">
	<col width="10">
	<col width="10">
	<col width="10">
	
<tr><th>ORDER ID</th>
    <th>ITEM IMAGE</th>
	<th> ITEM NAME </th>
	<th>PRICE </th>
	<th>QUANTITY </th>
	<th>SUBTOTAL</th>
</tr>
</table>	

<?php
$emailid1=$_SESSION['email'];
$s="select * from orders where email='$emailid1'";
		$con=mysqli_connect("127.0.0.1","root","","projdb"); 
		if($con)
		{ 
			$rs=mysqli_query($con,$s);
			$tot=0;
			while($fr=mysqli_fetch_array($rs))
			{	
				$a=$fr[0];
				$b=$fr[1];   /*itemname*/
				$c=$fr[2]; /*Image*/
				$d=$fr[3]; /* Price */
				$e=$fr[4]; /* unit */
				$f=$fr[5]; /* Category*/
				$g=$fr[6];
				$h=$fr[7];
			$tot=$tot+$h;
			
			
			
	/*	
 1px solid #b3cccc
 
width: 16%;
	
table.tb1 th{
	width: 16%;
}*/
	?>
	<table class="tb2">
	<col width="10">
	<col width="20">
	<col width="30">
	<col width="10">
	<col width="10">
	<col width="10">
	
		<tr> <td><?php echo $a; ?> </td> 
		<!--tr> <td>	<?php echo $b; ?> </td> </tr-->
		<td>	<img src="images/data/<?php echo $c; ?>" </img></td> 
		<!--tr> <td>	<?php echo $d; ?> </td> </tr-->
		<td><?php echo $e; ?> </td> 
		<td><?php echo $f; ?> </td> 
		<td><?php echo $g; ?> </td> 
		<td><?php echo $h; ?> </td> </tr>
		</table>	
<?php			}
		}
		?>
<h2 text align="center">TOTAL: <?php echo $tot; ?> </h2>
</body>
</html>