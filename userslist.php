<!DOCTYPE HTML>
<html>
<head>
<title> Users list</title>

</head>
<body>

<?php
  $s="select * from users";
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
?>
<form action="userslist.php">
   <img src="images/data/<?php echo $a; ?>">
   <?php echo $b; ?>
   <?php echo $c; ?>
   <?php echo $d; ?>
   <?php echo $e; ?>
   <?php echo $f; ?>
   <?php echo $g; ?>
   <?php echo $h; ?>
   <?php echo $i; ?>
   <?php echo $j; ?>
</form>

<?php
}
}
?>   
</body>
</html>