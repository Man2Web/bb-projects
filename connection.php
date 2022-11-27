<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bbprojects";

$con=mysqli_connect($servername,$username,$password,$dbname);

$name=$_POST['name'];
$email=$_POST['email'];
$phn=$_POST['phone'];
$sub=$_POST['subject'];
$msg=$_POST['message'];

$sql="INSERT INTO contact_us(name,email,phone,subject,message) VALUES('$name','$email','$phn','$sub','$msg')";

if(mysqli_query($con,$sql)==true){
		
			?>

			<script>
				alert('Details submission succcessful!!');
			</script>
			<script>window.open('contact.php','_self')</script>
			<?php
}
