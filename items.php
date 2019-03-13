<!DOCTYPE HTML>
<html>
<head>
<title> enter items </title>

</head>
<body>
 <?php
   if(!empty($_POST['s1']))
   {
     $id=$_POST['itemid'];
	 $name=$_POST['itemname'];
	 $ima=$_FILES['image']['name'];
	 $pri=$_POST['price'];
	 $uni=$_POST['unit'];
	 $cate=$_POST['category'];
	 $sto=$_POST['stock'];
	 $s="insert into items(itemid,itemname,image,price,unit,category,stock)values('$id','$name','$ima','$pri','$uni','$cate','$sto')";
	 $con=mysqli_connect("127.0.0.1","root","","projdb");
	 if($con)
	 {
	   mysqli_query($con,$s);
	   move_uploaded_file($_FILES['image']['tmp_name'],"images/data/".$ima);
	 }
   }
 ?>
 
<form action="items.php" method="post" enctype="multipart/form-data">
  <input type="text" placeholder="Enter item id" name="itemid" required>
  <input type="text" placeholder="Enter item name" name="itemname" required>
  <input type="file" name="image">
  <input type="text" placeholder="Enter item price" name="price" required>
  <input type="text" placeholder="Enter unit of measurement" name="unit" required>
  <input type="text" placeholder="Enter item category" name="category" required>
  <input type="text" placeholder="Enter stock" name="stock" required>
  <input type="submit" name="s1">
</form>
</body>
</html>