<?php 
session_start();
$con=mysqli_connect("localhost","root","","bbprojects");
//define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'https://mitragroceries.com/');
//define('SITE_PATH','https://mitragroceries.com/');

define('PRODUCT_IMAGE_SERVER_PATH','uploads/');
define('PRODUCT_IMAGE_SITE_PATH','uploads/');
?>
