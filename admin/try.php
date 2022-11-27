<?php 
session_start();
$con=mysqli_connect("localhost","root","","u878699405_mitra");
define('PRODUCT_IMAGE_SERVER_PATH','uploads/');
define('PRODUCT_IMAGE_SITE_PATH','uploads/');
?>
<?php

$sql="select * from product where id=47";
$res=mysqli_query($con,$sql);
?>
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
							   <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>" width=300; height=150;
							   class="image"/>
							   <?php echo $row['description']?><br><br>
							   <?php
							   
							   echo "</div>";?>
<!--							   <td><?php echo $row['qty']?></td>-->
							  
								<br><br>
							   </td>
							</tr>
							<?php } ?>
