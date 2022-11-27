<?php
require('top.inc.php');
	$msg="";
	if(isset($_POST['submit'])){
	
		$target="clients/".basename($_FILES['image']['name']);
		
		$db=mysqli_connect("localhost","root","","u878699405_mitra");
		
		$image=$_FILES['image']['name'];
		$text=$_POST['text'];
		$title=$_POST['title'];
		
		$sql="INSERT INTO images(title,image,text) VALUES('$title','$image','$text');";
		mysqli_query($db,$sql);
		
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
			$msg="image uploaded successfully";
		}else
		{
			$msg="problem occured";
		}
	}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Clients</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Title</label>
									<input type="text" name="title" placeholder="Enter post title" class="form-control" required value="<?php echo $mrp?>">
								</div>
								
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Image</label>
									<input type="file" name="image" class="form-control" <?php echo  $image_required?>>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Description</label>
									<textarea name="text" placeholder="Enter content description" class="form-control" required><?php echo $description?></textarea>
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>
