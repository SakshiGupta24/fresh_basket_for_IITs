<!DOCTYPE HTML>
<html>
<head>
<title> Items list</title>

</head>
<body>

<?php
  $s="select * from items";
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
  
?>
<form action="itemslist.php">
   <?php echo $a; ?>
   <?php echo $b; ?>
   <img src="images/data/<?php echo $c; ?>">
   <?php echo $d; ?>
   <?php echo $e; ?>
   <?php echo $f; ?>
   <?php echo $g; ?>
</form>

<?php
}
}
?>   
</body>
</html>