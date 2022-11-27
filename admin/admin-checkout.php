<?php require 'top.inc.php'; ?>
<?php 
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='order_status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='deactive'){
			$order_status='completed';
		}else{
			$order_status='pending';
		}
		$update_status_sql="update checkout set order_status='$order_status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
}
$sql="select * from checkout where payment_mode='cod'";
$res=mysqli_query($con,$sql);  ?>

 



 


<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title" style="float:left">COD Orders </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					
                        <table class="table display" id="data">
                            
						 <thead>
							<tr>
							   <th>S.No</th>
							   <th>Name</th>
							   <th>Email</th>
							   <th>Phone</th>
							   <th>Pick up location</th>
                                <th>Amount</th>
                                <th>Transaction Id</th>
                                <th>Order Status</th>
                                <th>Order Details</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   
							   <td><?php echo $i; ?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['email']?></td>
							   <td><?php echo $row['phone']?></td>
							   <td><?php echo $row['location']?></td>
							   <td><?php echo $row['total']?></td>
                                <td><?php echo $row['trans_id']?></td>
                               
                               
                                
                                
                               
                                <td>
                                    
                                <?php
								if($row['order_status']=='pending'){
									echo "<span class='badge badge-pending'><a href='?type=order_status&operation=deactive&id=".$row['id']."'>Processing</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-complete'><a href='?type=order_status&operation=active&id=".$row['id']."'>Completed</a></span>&nbsp;";
								}
								?>
                                    </td>
						
                                <td><a href="order_details.php?id=<?php echo $row['id'];?>" class="badge badge-warning"><span>Details</span></a><?php echo "&nbsp;"."&nbsp;"?></td>
                             </tr>
                             <?php $i++; } ?>
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
		$(document).ready(function() {
    $('#data').DataTable();
} );
		
		
	</script>
<?php
require('footer.inc.php');
?>