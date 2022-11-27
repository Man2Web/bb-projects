<?php
require('top.inc.php');
?>
<?php
$msg='';
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
    

$sql="select * from admin_users where (username='$username');";

      $res=mysqli_query($con,$sql);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
		if($username==isset($row['username']))
		{
			$msg="Username already exists!";
		}
		}
elseif($password != $cpassword){
	
	
        $msg="passwords Doesn't match";
}
	else{
		mysqli_query($con,"insert into `admin_users`(username,password) values('$username','$password')");
        $msg="Account created sucessfully with username : $username & password : $password";
	}
}




	
?>


<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Dashboard </h4>
                          <div class="sufee-login d-flex align-content-center flex-wrap">
                     <div class="container">
                        <div class="login-content">
                           <div class="login-form mt-150">
                              <form method="post">
                                 <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                                 </div>
                                 <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                 </div>
                                 <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="cpassword" class="form-control" placeholder=" Confirm Password" required>
                                 </div>
                                 <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Create Account</button>
                                </form>
                                <div class="field_error"><?php echo $msg?></div>
                           </div>
                        </div>
                     </div>
                  </div>
				</div>
			</div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>