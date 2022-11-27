<?php
require('top.inc.php');
?>         
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
		$update_status_sql="update contact_us set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
}
$sql="select * from contact_us";
$res=mysqli_query($con,$sql);  ?>







<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title" style="float:left">Contacts </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					
                        <table class="table " >
						 <thead style="text-align:center">
							<tr>
                                <th>Id</th>
							   <th>Name</th>
                                <th>Email</th>
							   <th>Phone</th>
							   <th>Location</th>
							   <th>Message</th>
                                <th>Status</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   
							   <td><?php echo $row['id'] ?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['email']?></td>
							   <td><?php echo $row['phone']?></td>
							   <td><?php echo $row['subject']?></td>
							   <td><?php echo $row['message']?></td>
                              <td>
								<?php
								if($row['status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'>completed</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'>pending</a></span>&nbsp;";
								}
								
								?>
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
<?php
require('footer.inc.php');
?>
