<?php
ob_start();
require('connection.inc.php');
require('functions.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:login.php');
	die();
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Admin Dashboard</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.png">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" type="text/javascript"></script>
   </head>
   <body>
      <aside id="left-panel" class="left-panel" >
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="categories.php" > Categories</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="product.php" > Projects</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="blogs.php" > Blogs</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="contacts.php" >Contacts</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="clients.php" >Add clients</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="add-user.php" >Add Admins</a>
                  </li>
                   <li class="menu-item-has-children dropdown">
                     <a href="admin-users.php" >Admin Users</a>
                  </li>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="index.php"><img src="images/logo2.png" alt="Logo"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="logout.php" class="dropdown-toggle active"><i class="fa fa-power-off"></i>Logout</a>
                     
                        
                  </div>
               </div>
            </div>
         </header>
