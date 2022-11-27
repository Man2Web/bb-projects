<?php
require('top.inc.php');
?>
<html>
	<head>
		<style>
			#img_div{
			max-width:100%;
			padding:5px;
			margin:15px auto;
			border: 1px solid #cbcbcb;
			}

			#img_div:after{
				content:"";
				display: block;
				clear: both;
			}
			.image{
				max-width:100%;
				height: auto;
				float: left;
				margin: 5px;
				width: 300px;
				height: 140px;
			}
		</style>
	</head>
</html>
<?php

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update product set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
		header('location:product.php');
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from product where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select product.*,categories.categories from product,categories where product.categories_id=categories.id order by product.id desc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title" style="float:left">Projects </h4>
				   <h4 class="btn btn-success" style="float:right;"><a href="manage_product.php" style="color:white"><i class="fa fa-plus-circle"></i> Add Projects</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   
							   <?php echo "ID:".$row['id']; echo str_repeat('&nbsp;', 5);?>
							   <b><?php echo "Category:".$row['categories']; echo str_repeat('&nbsp;', 5);?></b>
							   <?php echo "Author:".$row['name']?><br>
							   <?php echo "Title:".$row['short_desc']?><br>
							   <?php
							   echo "<div id='img_div'>";?>
							   <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>" width=300; height=150; class="image"/>
							   <?php echo $row['description']?><br><br>
							   <?php
							   
							   echo "</div>";?>
<!--							   <td><?php echo $row['qty']?></td>-->
							  
								<?php
								if($row['status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
								}
								echo "<span class='badge badge-edit'><a href='manage_product.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
								
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."' onclick=\"javascript:return confirm('Are you sure you want to delete?');\">Delete</a></span>";
								$i++;
								?>
								<br><br>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<script>


     



</script>
    <?php
require('footer.inc.php');
?>
