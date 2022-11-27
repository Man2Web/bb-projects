<?php
$servername="localhost";
$username="root";
$password="";
$dbname="u878699405_mitra";

$con=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submit'])){
	$categories_id=$_POST['categories_id']);
	$name=$_POST['name']);
	$description=$_POST['description']);
	
	$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
	$target="uploads/".$image;
	move_uploaded_file($_FILES['image']['tmp_name'],$target);
	
	$sql="INSERT INTO products(categories_id,name,image,description,status) VALUES('$categories_id','$name','$image','$description',1)";

if(!mysqli_query($con,$sqll)){

	echo "not inserted";
}	
?>
